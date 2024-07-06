<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Payment\TripayController;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CheckOutController extends Controller
{
    public function pre(Request $request)
    {
        $kuantitas = $request->kuantitas;
        $random = $request->random;
        $slug_product = $request->slug_product;

        return redirect()->route('customer.checkout', [
            'slug_product' => $slug_product,
            'kuantitas' => $kuantitas,
            'random' => $random,
        ]);
    }

    public function update_info_for_checkout(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'provinsi_user' => 'required',
                'kabupaten_user' => 'required',
                'kecamatan_user' => 'required',
                'kelurahan_user' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'alamat_lengkap' => 'required',
                'no_telp' => 'required',
            ], [
                'provinsi_user.required' => 'Wajib diisi!',
                'kabupaten_user.required' => 'Wajib diisi!',
                'kecamatan_user.required' => 'Wajib diisi!',
                'kelurahan_user.required' => 'Wajib diisi!',
                'latitude.required' => 'Wajib diisi!',
                'longitude.required' => 'Wajib diisi!',
                'alamat_lengkap.required' => 'Wajib diisi!',
                'no_telp.required' => 'Wajib diisi!',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);

            $user->update($input);
            if ($user) {
                return redirect()->back()->with('success', 'Data berhasil diubah');
            } else {
                return redirect()->back()->with('errors', 'Data gagal diubah');
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function index($slug_product, $kuantitas, $random)
    {
        try {
            if (Auth::check()) {
                $manage_qty = Product::where('slug_product', $slug_product)->first();
                $user = auth()->user();
                // if($user->provinsi_user == NULL || $user->kabupaten_user == NULL || $user->kecamatan_user == NULL || $user->kelurahan_user == NULL){
                //     return redirect()->back()->with('alamat', 'Anda belum mempunyai alamat');
                // }
                // if($user->no_telp == NULL){
                //     return redirect()->back()->with('no_telp', 'Anda belum mempunyai nomor telepon');
                // }

                if ($kuantitas > $manage_qty->stok_hewan_ternak) {
                    return redirect()->back()->with('status', 'Jumlah kuantitas melebihi stok');
                } elseif ($kuantitas == 0){
                    return redirect()->back()->with('status', 'Jumlah kuantitas tidak boleh 0');
                } elseif ($kuantitas < 0){
                    return redirect()->back()->with('status', 'Jumlah kuantitas tidak boleh kurang dari 0');
                }

                $tripay = new TripayController();
                $channels = $tripay->getPaymentChannels();
                $product = Product::with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct', 'categorylivestocks')->where('slug_product', $slug_product)->first();
                $total_harga = $kuantitas * $product->harga_product;

                return view('pages.market.checkout', compact('channels', 'product', 'kuantitas', 'random', 'total_harga'));
            } else {
                return redirect()->route('customer.login');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function show($reference)
    {
        $tripay = new TripayController();
        $detail = $tripay->detailTransaction($reference);
        $instruksi = $detail->instructions;
        $orderitems = $detail->order_items;

        // dd(json_encode($orderitems));

        $order = Order::where('merchant_ref', $detail->merchant_ref)->first();
        $orderdetail = OrderDetail::where('id_order', $order->id)->first();
        $products = Product::with('categorylivestocks', 'categoryproduct', 'gender_livestocks', 'partner', 'testimonial', 'reviews', 'typelivestocks')->where('id', $orderdetail->id_product)->first();

        return view('pages.market.finally', compact('detail', 'instruksi', 'products', 'orderitems'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $product = Product::find($request->product_id);
        $method = $request->method;

        $kuantitas = $request->kuantitas;
        $harga_product = $product->harga_product;
        $nama_product = $product->nama_product;
        $gambar_hewan = $product->gambar_hewan;
        $slug_product = $request->slug_product;
        $catatan = $request->catatan;

        $harga_total = $harga_product * $kuantitas;

        $tripay = new TripayController();
        $reference = $tripay->requestTransaction($product, $method, $kuantitas, $harga_product, $nama_product, $gambar_hewan);
        // dd($reference);
        $metode_pembayaran = $reference->data->payment_method;
        // dd($catatan);

        // Membuat pesanan baru
        $order = Order::create([
            'id_user' => auth()->user()->id,
            'status' => 'Baru',
            'pengiriman' => 'Pengiriman Internal',
            'catatan' => $catatan,
            'reference' => $reference->data->reference,
            'merchant_ref' => $reference->data->merchant_ref,
            'status_pembayaran' => $reference->data->status,
            'metode_pembayaran' => $metode_pembayaran,
        ]);

        $id_order = $order->id;

        OrderDetail::create([
            'id_partner' => $product->id_partner,
            'id_product' => $product->id,
            'harga_total' => $harga_total,
            'kuantitas_total' => $kuantitas,
            'id_order' => $id_order,
            'diskon' => 0,
            'metode_pembayaran' => $method
        ]);

        $product->stok_hewan_ternak -= $kuantitas;
        $product->terjual += $kuantitas;
        $product->save();

        // dd($product->harga_product);

        return redirect()->route('customer.checkout.show', [
            $reference->data->reference
        ]);
    }
}
