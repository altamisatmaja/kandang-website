<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderCustomerController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $orders = Order::where('id_user', $user->id)->get();
        $allorders = [];

        foreach ($orders as $order) {
            $orderDetails = OrderDetail::with('partner', 'product')->where('id_order', $order->id)->get();
            $allorders[] = [
                'order' => $order,
                'order_details' => $orderDetails
            ];
        }

        return view('customer.pages.order.index', compact('allorders'));
    }

    public function show($slug_product){
        return view('customer.pages.order.show');
    }
}
