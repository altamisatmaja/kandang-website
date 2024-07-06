<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CategoryLivestock;
use App\Models\TypeLivestock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeLivestockController extends Controller
{
    public function __construct(){
        // $this->middleware('auth:api')->except(['index']);
        $this->middleware('auth')->only(['list']);
        // $this->middleware('auth:api')->only(['store', 'delete']);
        $this->middleware('auth:api')->only(['delete']);
    }

    public function list(){
        return view('admin.pages.typelivestock.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $typelivestock = TypeLivestock::all();

        $typelivestock = TypeLivestock::with('categorylivestock')->get();
        // $typelivestock = TypeLivestock::where('id_category_livestocks', $categorylivestock->id);

        // dd($typelivestock);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $typelivestock
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
            'nama_jenis_hewan' => 'required',
            'deskripsi_jenis_hewan' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                $validator->errors(), 422
            ]);
        }

        $typelivestock = TypeLivestock::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $typelivestock
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeLivestock  $typeLivestock
     * @return \Illuminate\Http\Response
     */
    public function show(TypeLivestock $typelivestock)
    {
        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $typelivestock
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeLivestock  $typeLivestock
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeLivestock $typeLivestock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeLivestock  $typeLivestock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeLivestock $typelivestock)
    {
        $validator = Validator::make($request->all(), [
            'nama_jenis_hewan' => 'required',
            'deskripsi_jenis_hewan' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                $validator->errors(), 422
            ]);
        }

        $typelivestock->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $typelivestock
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeLivestock  $typeLivestock
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeLivestock $typelivestock)
    {
        $typelivestock->delete();

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $typelivestock
        ]);
    }
}
