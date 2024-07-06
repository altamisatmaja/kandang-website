<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportPartnerController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        // dd($partner);
        $report = OrderDetail::with('product.categoryproduct', 'partner', 'order.user', 'order')->where('id_partner', $partner->id)->get();

        // dd($report);
        $reportdata = $report->map(function ($report) {
            return [
                'reference' => $report->order->reference ?? 'tidak ditemukan',
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
            ];
        });

        // dd($reportdata);

        return view('partner.pages.report.index', compact('partner', 'reportdata'));
    }

    // public function show($reference)
    // {
    //     $user = Auth::user();
    //     $partner = Partner::where('id_user', $user->id)->first();
    //     return view('partner.pages.report.detail', compact('partner'));
    // }
}
