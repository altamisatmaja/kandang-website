<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use DB;

class ReportAdminController extends Controller
{
    public function index()
    {
        $reports = DB::table('orders_details')
            ->leftJoin('products', 'products.id', '=', 'orders_details.id_product')
            ->leftJoin('partners', 'partners.id', '=', 'orders_details.id_partner')
            ->leftJoin('orders', 'orders.id', '=', 'orders_details.id_order')
            ->select(DB::raw('partners.nama_partner as nama_partner, products.id as id_product, nama_product, harga_product, orders_details.kuantitas_total as total_qty, orders_details.harga_total as total_harga,orders_details.created_at as created_at'))
            ->orderBy('orders_details.created_at', 'ASC')
            ->get();

        return view('admin.pages.report.index', compact('reports'));
    }

    public function range(Request $request)
    {
        $reports = DB::table('orders_details')
        ->leftJoin('products', 'products.id', '=', 'orders_details.id_product')
        ->leftJoin('partners', 'partners.id', '=', 'orders_details.id_partner')
        ->leftJoin('orders', 'orders.id', '=', 'orders_details.id_order')
        ->select(DB::raw('partners.nama_partner as nama_partner, products.id as id_product, nama_product, harga_product, orders_details.kuantitas_total as total_qty, orders_details.harga_total as total_harga,orders_details.created_at as created_at'))
            ->whereRaw("date(orders_details.created_at) >= '$request->dari'")
            ->whereRaw("date(orders_details.created_at) <= '$request->sampai'")
            ->orderBy('orders_details.created_at', 'ASC')
            ->get();

        return view('admin.pages.report.index', compact('reports'));
    }

    public function show($id)
    {
        $report = OrderDetail::with('product.categoryproduct', 'partner', 'order.user')->where('id', $id)->get();
        $reportdata = $report->map(function ($report) {
            return [
                'reference' => $report->order->reference,
                'status' => $report->order->status,
                'pengiriman' => $report->order->pengiriman,
                'catatan' => $report->order->catatan,
                'total_untung' => $report->harga_total,
                'kuantitas' => $report->kuantitas_total,
                'nama_pembeli' => $report->order->user->nama,
                'gambar_pembeli' => $report->order->user->profile_photo_path,
                'lokasi_pengiriman' => $report->order->user->kabupaten_user,
                'nama_produk' => $report->product->nama_product,
                'gambar_produk' => $report->product->gambar_hewan,
                'nama_kategori_produk' => $report->product->categoryproduct->first()->nama_kategori_product,
                'harga_produk' => $report->product->harga_product,
                'dipesan_pada' => $report->order->created_at,
                'metode_pembayaran' => $report->order->metode_pembayaran,
            ];
        });

        return view('admin.pages.report.show', compact('reportdata'));
    }
}
