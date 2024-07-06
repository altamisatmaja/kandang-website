<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Farm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FarmPartnerController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['list']);
        $this->middleware('auth:api')->only(['delete']);
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
            'data' => $farm,
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
            'berat_badan_hewan' => 'required',
            'id_kategori_hewan' => 'required',
            'nama_hewan' => 'required',
            'kode_hewan' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $farm = Farm::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $farm,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id_kondisi_hewan' => 'required',
            'id_jenis_gender_hewan' => 'required',
            'id_partner' => 'required',
            'id_jenis_hewan' => 'required',
            'lahir_hewan' => 'required',
            'deskripsi_hewan' => 'required',
            'berat_badan_hewan' => 'required',
            'id_kategori_hewan' => 'required',
            'nama_hewan' => 'required',
            'kode_hewan' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $farm = Farm::update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $farm,
        ]);
    }

    
    public function destroy(Farm $farm)
    {
        $farm->delete();

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $farm,
        ]);
    }
}
