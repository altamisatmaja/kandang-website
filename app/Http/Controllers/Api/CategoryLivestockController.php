<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CategoryLivestock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryLivestockController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['list']);
        $this->middleware('auth:api')->only(['delete']);
    }
    public function list(){
        return view('admin.pages.category_livestock.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryLivestock = CategoryLivestock::all();

        return response()->json([
            'data' => $categoryLivestock,
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
            'nama_kategori_hewan' =>  'required',
            'deskripsi_kategori_hewan' =>  'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $categoryLivestock = CategoryLivestock::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $categoryLivestock    ,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryLivestock  $categoryLivestock
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryLivestock $categorylivestock)
    {
        return response()->json([
            'data' => $categorylivestock,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryLivestock  $categoryLivestock
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryLivestock $categoryLivestock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CategoryLivestock  $categoryLivestock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryLivestock $categorylivestock)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori_hewan' =>  'required',
            'deskripsi_kategori_hewan' =>  'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $categorylivestock->update($request->all());

        return response()->json([
            'success' => 'true',
            'message' => 'succes',
            'data' => $categorylivestock
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryLivestock  $categoryLivestock
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryLivestock $categorylivestock)
    {
        $categorylivestock->delete();

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $categorylivestock
        ]);
    }
}
