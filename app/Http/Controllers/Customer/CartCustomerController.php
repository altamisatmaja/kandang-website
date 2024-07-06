<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Contracts\Providers\Auth;

class CartCustomerController extends Controller
{
    public function index(){
        $user = auth()->user();
        $cart = Cart::with('user', 'product')->with('product.typelivestocks')->with('product.categorylivestocks')->with('product.gender_livestocks')->with('product.partner')->with('product.categoryproduct')->with('product.reviews')->with('product.testimonial')->where('id_user', $user->id)->get();

        $totalcart = count($cart);
        return view('customer.pages.cart.index', compact('cart', 'totalcart'));
    }

    public function show($slug_product){
        $user = auth()->user();
        return view('customer.pages.cart.show');
    }

    public function store(Request $request, $id){
        try {
            if (!auth()->check()) {
                return redirect()->route('customer.login')->with('error', 'Anda harus login terlebih dahulu untuk menambahkan ke keranjang.');
            }

            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'id_product' => 'required'
            ]);

            if ($validator->fails()){
                return response()->json(
                    $validator->errors(), 422
                );
            }

            $input = $request->all();
            $input['id_user'] = $user->id;
            $cart = Cart::create($input);

            if ($cart) {
                return redirect()->route('customer.cart')->with('success', 'Data keranjang berhasil ditambahkan');
            } else {
                return redirect()->back()->with('error', 'Data gagal produk berhasil dilisting');
            }

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    public function destroy(Request $request, $id){
        try {
            $cart = Cart::where('id_product', $id)->first();

            if ($cart) {
                $cart->delete();

                return redirect()->route('customer.cart')->with('success', 'Data keranjang berhasil dihapus');
            } else {
                return redirect()->back()->with('error', 'Data keranjang gagal dihapuds');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
