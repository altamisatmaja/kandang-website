<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewAdminController extends Controller
{
    public function list(){
        $review = Review::with('products', 'user')->get();
        // dd($review);

        return view('admin.pages.review.list', compact('review'));
    }

    public function destroy($id){
        try {
            $review = Review::find($id);

            if ($review){
                $review->delete();
                return redirect()->back()->with('success', 'Data berhasil dihapus');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan:'. $e->getMessage());
        }
    }
}
