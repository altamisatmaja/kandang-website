<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['index']);
        $this->middleware('auth:api')->only(['get_data']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_data(Request $request)
    {
        $report = DB::table('orders_details')
            ->join('products', 'products.id', '=', 'orders_details.id_product')
            ->join('partners', 'partners.id', '=', 'orders_details.id_partner')
            ->select(DB::raw('partners.nama_partner as nama_partner, products.id as id_product, count(*) as jumlah_dibeli, nama_product, harga_product, SUM(kuantitas) as total_qty'))
            ->whereRaw("date(orders_details.created_at) >= '$request->dari'")
            ->whereRaw("date(orders_details.created_at) <= '$request->sampai'")
            ->groupBy('id_product', 'nama_product', 'harga_product', 'products.id', 'nama_partner')
            ->get();

        return response()->json([
            'data' => $report
        ]);
    }

    public function index()
    {
        return view('admin.pages.report.index');
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
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
