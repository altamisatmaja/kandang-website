<?php

namespace App\Http\Controllers\Api;

use App\Models\Livestock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LivestockController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api')->except(['index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livestock = Livestock::all();

        return response()->json([
            'data' => $livestock,
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livestock  $livestock
     * @return \Illuminate\Http\Response
     */
    public function show(Livestock $livestock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livestock  $livestock
     * @return \Illuminate\Http\Response
     */
    public function edit(Livestock $livestock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livestock  $livestock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livestock $livestock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livestock  $livestock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livestock $livestock)
    {
        //
    }
}
