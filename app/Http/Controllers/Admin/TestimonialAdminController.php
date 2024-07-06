<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialAdminController extends Controller
{
    public function list()
    {
        $testimonials = Testimonial::with('product', 'user')->get();
        return view('admin.pages.testimoni.list', compact('testimonials'));
    }

    public function destroy($id)
    {
        try {
            $testimonial = Testimonial::where('id', $id)->first();

            File::delete('uploads/' . $testimonial->id);

            $testimonial->delete();

            return redirect()->route('admin.testimoni.list')->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $testimonials = Testimonial::where('id', $id)->first();
            $product = Product::where('id', $testimonials->id_products)->first();
            $user = User::where('id', $testimonials->id_user)->first();
            $reviews = Review::where('id_product', $product->id)->get();

            $total_rating = 0;
            // $ratings = 0;
            foreach ($reviews as $review) {
                $total_rating += $review->rating;
                $ratings = $review->rating;
            }

            // dd($ratings);
            $total_reviews = count($reviews);

            if ($total_reviews != 0) {
                $hasil_reviews = number_format($total_rating / $total_reviews, 2);
            } else {
                $hasil_reviews = 0;
            }
            $banyak_reviewers = count($reviews);

            if ($testimonials) {
                return view('admin.pages.testimoni.show', compact('testimonials', 'product', 'user', 'reviews', 'hasil_reviews', 'banyak_reviewers'));
            } else {
                return redirect()->route('admin.testimoni.list')->with('error', 'Data tidak ditemukan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan:' . $e->getMessage());
        }
    }
}
