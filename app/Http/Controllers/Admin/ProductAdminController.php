<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductAdminController extends Controller
{
    public function index(){

        $product = Product::with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct')->where('status', 'Aktif')->get();
        return view('admin.pages.product.index', compact('product'));
    }

    public function show($slug_product){
        $id_products = Product::where('slug_product', $slug_product)->first()->id;
        $reviews = Review::where('id_product', $id_products)->get();
        $total_rating = 0;

        foreach ($reviews as $review) {
            $total_rating += $review->rating;
        }

        $total_reviews = count($reviews);

        if($total_reviews != 0){
            $hasil_reviews = number_format($total_rating / $total_reviews, 2);
        } else {
            $hasil_reviews = 0;
        }
        $banyak_reviewers = count($reviews);

        $product = Product::with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct', 'categorylivestocks')->where('slug_product', $slug_product)->first();

        return view('admin.pages.product.show', compact('product', 'reviews', 'hasil_reviews', 'banyak_reviewers'));
    }

    public function status_handling(Request $request, $slug_product){
        try {
            $product = Product::where('slug_product', $slug_product)->first();
            $validator = Validator::make($request->all(), [
                'status' => 'required'
            ], [
                'status' => 'Status wajib diisi'
            ]);

            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method' ]);
            $product->update($input);

            return redirect()->route('admin.product.list')->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
