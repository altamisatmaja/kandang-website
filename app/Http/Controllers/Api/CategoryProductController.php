<?php

namespace App\Http\Controllers\Api;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryProductController extends Controller
{
    public function __construct(){
        // Ignored, really
        $this->middleware('auth')->only(['list']);
        $this->middleware('auth:api')->only(['delete']);
    }   
    
    public function list(){
        $categoryproduct = CategoryProduct::all();
        return view('admin.pages.category_product.index', compact('categoryproduct'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $kategori = CategoryProduct::all();

        return response()->json([
            'data' => $kategori,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori_product' => 'required',
            'deskripsi_kategori_product' => 'required',
            'gambar_kategori_product' => 'required|image|mimes:jpg,png,jpeg,webp',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $input = $request->all();

        if($request->has('gambar_kategori_product')){
            $gambar = $request->file('gambar_kategori_product');
            $nama_gambar = time().rand(1,9).'.'.$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_kategori_product'] = $nama_gambar;
        }

        $kategori = CategoryProduct::create($input);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $kategori
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryProduct $category)
    {
        return response()->json([
            'data' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryProduct $categoryProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryProduct $category)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori_product' => 'required',
            'deskripsi_kategori_product' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $input = $request->all();

        if($request->hasFile('gambar_kategori_product')){
            File::delete('uploads/'.$category->gambar_kategori_product);
            $gambar = $request->file('gambar_kategori_product');
            $nama_gambar = time().rand(1,9).'.'.$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_kategori_product'] = $nama_gambar;
        } else {
            unset($input['gambar_kategori_product']);
        }

        $category->update($input);
        
        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $category,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryProduct  $categoryProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryProduct $category)
    {
        File::delete('uploads/'.$category->gambar_kategori_product);

        $category->delete();

        return response()->json([
            'message' => 'success',
            'success' => true,
        ]);
    }
}
