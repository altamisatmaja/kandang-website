<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CategoryLivestock;
use App\Models\CategoryProduct;
use App\Models\GenderLivestock;
use App\Models\Livestock;
use App\Models\Product;
use App\Models\Review;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Torann\GeoIP\Facades\GeoIP;

class PageWebController extends Controller
{
    public function index()
    {
        $baseurlapi = env('BASE_URL_AI');
        // Masih statis
        // $endpoint = '/product/6/4/';
        // $response = Http::get($baseurlapi . $endpoint);
        // $response = json_decode($response);

        return view('homepage');
    }

    public function category($slug_kategori_product)
{
    $category = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->first();

    $id_kategori = $category->id;
    $products = Product::with('categorylivestocks', 'categoryproduct', 'gender_livestocks', 'partner', 'testimonial', 'reviews', 'typelivestocks')->where('id_kategori', $id_kategori)->get();

    foreach ($products as $product) {
        $reviews = $product->reviews;

        $total_rating = 0;
        $total_reviews = count($reviews);

        foreach ($reviews as $review) {
            $total_rating += $review->rating;
        }

        $average_rating = ($total_reviews != 0) ? number_format($total_rating / $total_reviews, 2) : 0;

        $product->average_rating = $average_rating;
        $product->total_reviews = $total_reviews;

        $genderlivestock = '';
        foreach($product->gender_livestocks as $genders){
            $genderlivestock .= $genders->nama_gender;
        }

        $product->gender = $genderlivestock;

        $slug_category_livestock = '';
        foreach($product->categorylivestocks as $categorylivestock){
            $slug_category_livestock .= $categorylivestock->slug;
        }

        $product->slug_category_livestock = $slug_category_livestock;

        $slug_category_product = '';
        foreach ($product->categoryproduct as $categoryproducts) {
            $slug_category_product .= $categoryproducts->slug_kategori_product;
        }

        $product->slug_category_product = $slug_category_product;

        $slug_typelivestock = '';
        $nama_jenis_hewan = '';
        foreach ($product->typelivestocks as $typelivestock) {
            $slug_typelivestock .= $typelivestock->slug_typelivestocks;
            $nama_jenis_hewan .= $typelivestock->nama_jenis_hewan;
        }

        $product->slug_typelivestock = $slug_typelivestock;
        $product->nama_jenis_hewan = $nama_jenis_hewan;

        $lokasi = '';
        foreach($product->partner as $partners){
            $lokasi .= $partners->provinsi_partner;
        }

        $product->lokasi = $lokasi;
    }

    $breadcrumbs = $category->nama_kategori_product;

    return view('pages.market.categories', compact('products', 'slug_kategori_product', 'breadcrumbs'));
}


    public function product($slug_kategori_product, $slug_category_livestock, $slug_product, Request $request)
    {
        $product = Product::with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct', 'categorylivestocks')->where('slug_product', $slug_product)->first();

        $id_products = Product::where('slug_product', $slug_product)->first()->id;
        $reviews = Review::where('id_product', $id_products)->get();
        $total_rating = 0;
        foreach ($reviews as $review) {
            $total_rating += $review->rating;
        }

        $total_reviews = count($reviews);

        if ($total_reviews != 0) {
            $hasil_reviews = number_format($total_rating / $total_reviews, 2);
        } else {
            $hasil_reviews = 0;
        }
        $banyak_reviewers = count($reviews);

        $categoryproduct = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->first();
        $categorylivestock = CategoryLivestock::where('slug', $slug_category_livestock)->first();

        // dd($åproduct->id);

        $testimonials = Testimonial::with('testimonial_reply.partner', 'user')->where('id_products', $product->id)->get();

        // For 4 product
        $productstakes = Product::with('categorylivestocks', 'categoryproduct', 'gender_livestocks', 'partner', 'testimonial', 'reviews', 'typelivestocks')->orderBy('created_at', 'desc')->take(4)->get();

        foreach ($productstakes as $productake) {
            $reviews = $productake->reviews;

            $total_rating = 0;
            $total_reviews = count($reviews);

            foreach ($reviews as $review) {
                $total_rating += $review->rating;
            }

            $average_rating = ($total_reviews != 0) ? number_format($total_rating / $total_reviews, 2) : 0;

            $productake->average_rating = $average_rating;
            $productake->total_reviews = $total_reviews;

            $genderlivestock = '';
            foreach($productake->gender_livestocks as $genders){
                $genderlivestock .= $genders->nama_gender;
            }

            $productake->gender = $genderlivestock;

            $slug_category_livestock = '';
            foreach($productake->categorylivestocks as $categorylivestock){
                $slug_category_livestock .= $categorylivestock->slug;
            }

            $productake->slug_category_livestock = $slug_category_livestock;

            $slug_category_product = '';
            foreach ($productake->categoryproduct as $categoryproducts) {
                $slug_category_product .= $categoryproducts->slug_kategori_product;
            }

            $productake->slug_category_product = $slug_category_product;

            $slug_typelivestock = '';
            $nama_jenis_hewan = '';
            foreach ($productake->typelivestocks as $typelivestock) {
                $slug_typelivestock .= $typelivestock->slug_typelivestocks;
                $nama_jenis_hewan .= $typelivestock->nama_jenis_hewan;
            }

            $productake->slug_typelivestock = $slug_typelivestock;
            $productake->nama_jenis_hewan = $nama_jenis_hewan;

            $lokasi = '';
            foreach($productake->partner as $partners){
                $lokasi .= $partners->provinsi_partner;
            }

            $productake->lokasi = $lokasi;
        }

        $locationData = $this->getLocations($request);
        $latitude = $locationData['lat'];
        $longitude = $locationData['lot'];

        $user = auth()->user();
        return view('pages.market.product', compact('product', 'reviews', 'hasil_reviews', 'banyak_reviewers', 'categoryproduct', 'categorylivestock', 'testimonials', 'productstakes', 'user', 'latitude', 'longitude'));
    }

    public function getLocations(Request $request)
    {

        $userIp = $request->ip();
        $location = GeoIP::getLocation($userIp);

        $data = [
            'lat' => $location->lat,
            'lot' => $location->lon
        ];
        return $data;
    }

    public function farm($slug_kategori_product)
    {
        $category = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->first();

        return view('pages.market.farm', compact('products'));
    }

    public function by_categorytypelivestocks($slug)
    {
        $categorylivestock = CategoryLivestock::where('slug', $slug)->first();

        $products = Product::with('categorylivestocks', 'categoryproduct', 'gender_livestocks', 'partner', 'testimonial', 'reviews', 'typelivestocks')->where('id_category_livestocks', $categorylivestock->id)->get();

        foreach ($products as $product) {
            $reviews = $product->reviews;

            $total_rating = 0;
            $total_reviews = count($reviews);

            foreach ($reviews as $review) {
                $total_rating += $review->rating;
            }

            $average_rating = ($total_reviews != 0) ? number_format($total_rating / $total_reviews, 2) : 0;

            $product->average_rating = $average_rating;
            $product->total_reviews = $total_reviews;

            $genderlivestock = '';
            foreach($product->gender_livestocks as $genders){
                $genderlivestock .= $genders->nama_gender;
            }

            $product->gender = $genderlivestock;

            $slug_category_livestock = '';
            foreach($product->categorylivestocks as $categorylivestock){
                $slug_category_livestock .= $categorylivestock->slug;
            }

            $product->slug_category_livestock = $slug_category_livestock;

            $slug_category_product = '';
            foreach ($product->categoryproduct as $categoryproducts) {
                $slug_category_product .= $categoryproducts->slug_kategori_product;
            }

            $product->slug_category_product = $slug_category_product;

            $slug_typelivestock = '';
            $nama_jenis_hewan = '';
            foreach ($product->typelivestocks as $typelivestock) {
                $slug_typelivestock .= $typelivestock->slug_typelivestocks;
                $nama_jenis_hewan .= $typelivestock->nama_jenis_hewan;
            }

            $product->slug_typelivestock = $slug_typelivestock;
            $product->nama_jenis_hewan = $nama_jenis_hewan;

            $lokasi = '';
            foreach($product->partner as $partners){
                $lokasi .= $partners->provinsi_partner;
            }

            $product->lokasi = $lokasi;
        }

        // dd($slug);

        return view('pages.market.farm', compact('products', 'categorylivestock', 'slug'));
    }

    public function market()
    {
        $products = Product::with('categorylivestocks', 'categoryproduct', 'gender_livestocks', 'partner', 'testimonial', 'reviews', 'typelivestocks')->orderBy('created_at', 'desc')->take(4)->get();

        foreach ($products as $product) {
            $reviews = $product->reviews;

            $total_rating = 0;
            $total_reviews = count($reviews);

            foreach ($reviews as $review) {
                $total_rating += $review->rating;
            }

            $average_rating = ($total_reviews != 0) ? number_format($total_rating / $total_reviews, 2) : 0;

            $product->average_rating = $average_rating;
            $product->total_reviews = $total_reviews;

            $genderlivestock = '';
            foreach($product->gender_livestocks as $genders){
                $genderlivestock .= $genders->nama_gender;
            }

            $product->gender = $genderlivestock;

            $slug_category_livestock = '';
            foreach($product->categorylivestocks as $categorylivestock){
                $slug_category_livestock .= $categorylivestock->slug;
            }

            $product->slug_category_livestock = $slug_category_livestock;

            $slug_category_product = '';
            foreach ($product->categoryproduct as $categoryproducts) {
                $slug_category_product .= $categoryproducts->slug_kategori_product;
            }

            $product->slug_category_product = $slug_category_product;

            $slug_typelivestock = '';
            $nama_jenis_hewan = '';
            foreach ($product->typelivestocks as $typelivestock) {
                $slug_typelivestock .= $typelivestock->slug_typelivestocks;
                $nama_jenis_hewan .= $typelivestock->nama_jenis_hewan;
            }

            $product->slug_typelivestock = $slug_typelivestock;
            $product->nama_jenis_hewan = $nama_jenis_hewan;

            $lokasi = '';
            foreach($product->partner as $partners){
                $lokasi .= $partners->provinsi_partner;
            }

            $product->lokasi = $lokasi;
        }

        $categoryproduct = CategoryProduct::all();
        $categorylivestock = CategoryLivestock::all();
        $livestock = Livestock::all();

        return view('pages.market.index', compact('categoryproduct', 'categorylivestock', 'livestock', 'products'));
    }

    public function about()
    {
        return view('pages.about.index');
    }

    public function partner()
    {
        return view('pages.partner.index');
    }

    public function layanan()
    {
        return view('pages.layanan.index');
    }

    public function new_components(){
        $productss = Product::with('categorylivestocks', 'categoryproduct', 'gender_livestocks', 'partner', 'testimonial', 'reviews', 'typelivestocks')->orderBy('created_at', 'desc')->take(4)->get();

        foreach ($productss as $product) {
            $reviews = $product->reviews;

            $total_rating = 0;
            $total_reviews = count($reviews);

            foreach ($reviews as $review) {
                $total_rating += $review->rating;
            }

            $average_rating = ($total_reviews != 0) ? number_format($total_rating / $total_reviews, 2) : 0;

            $product->average_rating = $average_rating;
            $product->total_reviews = $total_reviews;

            $genderlivestock = '';
            foreach($product->gender_livestocks as $genders){
                $genderlivestock .= $genders->nama_gender;
            }

            $product->gender = $genderlivestock;

            $slug_category_livestock = '';
            foreach($product->categorylivestocks as $categorylivestock){
                $slug_category_livestock .= $categorylivestock->slug;
            }

            $product->slug_category_livestock = $slug_category_livestock;

            $slug_category_product = '';
            foreach ($product->categoryproduct as $categoryproducts) {
                $slug_category_product .= $categoryproducts->slug_kategori_product;
            }

            $product->slug_category_product = $slug_category_product;

            $slug_typelivestock = '';
            $nama_jenis_hewan = '';
            foreach ($product->typelivestocks as $typelivestock) {
                $slug_typelivestock .= $typelivestock->slug_typelivestocks;
                $nama_jenis_hewan .= $typelivestock->nama_jenis_hewan;
            }

            $product->slug_typelivestock = $slug_typelivestock;
            $product->nama_jenis_hewan = $nama_jenis_hewan;

            $lokasi = '';
            foreach($product->partner as $partners){
                $lokasi .= $partners->provinsi_partner;
            }

            $product->lokasi = $lokasi;
        }

        return view('components.new', compact('products'));
    }
}
