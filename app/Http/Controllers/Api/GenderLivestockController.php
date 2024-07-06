<?php

namespace App\Http\Controllers\Api;

use App\Models\GenderLivestock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class GenderLivestockController extends Controller
{
    public function __construct()
    {
        // Ignored, really
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
        $genderlivestock = GenderLivestock::all();

        return response()->json([
            'data' => $genderlivestock
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
            'nama_gender' => 'required',
            'deskripsi' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $genderlivestock = GenderLivestock::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $genderlivestock
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(GenderLivestock $genderLivestock)
    {
        return response()->json([
            'data' => $genderLivestock
        ]);
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
    public function update(Request $request, GenderLivestock $genderlivestock)
    {
        $validator = Validator::make($request->all(), [
            'nama_gender' => 'required',
            'deskripsi' => 'required'
        ]);

        if($validator->fails()){
            return response()->json(
                $validator->errors(), 422
            );
        }

        $genderlivestock->udate($request->all());

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $genderlivestock
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenderLivestock $genderlivestock)
    {
        $genderlivestock->delete();

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $genderlivestock
        ]);
    }
}
