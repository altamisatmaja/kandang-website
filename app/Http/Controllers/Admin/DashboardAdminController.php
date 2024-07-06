<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $product = Product::get();
        $total_product = count($product);

        $user = User::where('user_role', 'Pelanggan')->get();
        $total_user = count($user);

        $partner = User::where('user_role', 'Partner')->get();
        $total_partner = count($partner);

        $product_new = Product::with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct')->orderBy('created_at')->get()->take(5);

        return view('admin.dashboard', compact('total_product', 'total_user', 'total_partner', 'product_new'));
    }
}
