<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderProductAdminController extends Controller
{
    public function index(){
        $orders = Order::with('user')->get();
        $allorders = [];

        foreach ($orders as $order) {
            $orderDetails = OrderDetail::with('product', 'partner')->where('id_order', $order->id)->get();
            $allorders[] = [
                'order' => $order,
                'order_details' => $orderDetails,
            ];
        }

        return view('admin.pages.order.index', compact('allorders'));
    }

    public function order_new(){
        $orders = Order::with('user')->where('status', 'Baru')->get();
        $allorders = [];

        foreach ($orders as $order) {
            $orderDetails = OrderDetail::with('product', 'partner')->where('id_order', $order->id)->get();
            $allorders[] = [
                'order' => $order,
                'order_details' => $orderDetails,
            ];
        }

        return view('admin.pages.order.new', compact('allorders'));
    }

    public function order_confirmed(){
        $orders = Order::with('user')->where('status', 'Dikonfirmasi')->get();
        $allorders = [];

        foreach ($orders as $order) {
            $orderDetails = OrderDetail::with('product', 'partner')->where('id_order', $order->id)->get();
            $allorders[] = [
                'order' => $order,
                'order_details' => $orderDetails,
            ];
        }

        return view('admin.pages.order.confirmed', compact('allorders'));
    }

    public function order_packed(){
        $orders = Order::with('user')->where('status', 'Dikemas')->get();
        $allorders = [];

        foreach ($orders as $order) {
            $orderDetails = OrderDetail::with('product', 'partner')->where('id_order', $order->id)->get();
            $allorders[] = [
                'order' => $order,
                'order_details' => $orderDetails,
            ];
        }

        return view('admin.pages.order.packed', compact('allorders'));
    }

    public function order_sent(){
        $orders = Order::with('user')->where('status', 'Dikirim')->get();
        $allorders = [];

        foreach ($orders as $order) {
            $orderDetails = OrderDetail::with('product', 'partner')->where('id_order', $order->id)->get();
            $allorders[] = [
                'order' => $order,
                'order_details' => $orderDetails,
            ];
        }

        return view('admin.pages.order.sent', compact('allorders'));
    }

    public function order_end(){
        $orders = Order::with('user')->where('status', 'Selesai')->get();
        $allorders = [];

        foreach ($orders as $order) {
            $orderDetails = OrderDetail::with('product', 'partner')->where('id_order', $order->id)->get();
            $allorders[] = [
                'order' => $order,
                'order_details' => $orderDetails,
            ];
        }

        return view('admin.pages.order.end', compact('allorders'));
    }
}
