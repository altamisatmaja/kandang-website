<?php

namespace App\Http\Controllers\Api;

use App\Models\Farm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class FarmController extends Controller
{
    public function __construct(){
        $this->middleware('auth:api')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farm = Farm::all();

        return response()->json([
            'data' => $farm
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
            'id_kondisi_hewan' => 'required',
            'id_jenis_gender_hewan' => 'required',
            'id_partner' => 'required',
            'id_jenis_hewan' => 'required',
            'lahir_hewan' => 'required',
            'deskripsi_hewan' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $farm = Farm::create($request->all());

        return response()->json([
            'message' => 'success',
            'data' => $farm
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function show(Farm $farm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function edit(Farm $farm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farm $farm)
    {
        $validator = Validator::make($request->all(), [
            'id_kondisi_hewan' => 'required',
            'id_jenis_gender_hewan' => 'required',
            'id_partner' => 'required',
            'id_jenis_hewan' => 'required',
            'lahir_hewan' => 'required',
            'deskripsi_hewan' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $farm->update($request->all());

        return response()->json([
            'message' => 'success',
            'data' => $farm
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farm $farm)
    {
        $farm->delete();

        return response()->json([
            'message' => 'success',
            'data' => $farm
        ]);
    }
}
