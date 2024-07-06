<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['list']);
        $this->middleware('auth:api')->only(['delete']);

        // 'handle_status', 'order_new', 'order_confirmed', 'order_packed', 'order_sent', 'order_accepted', 'order_end'
    }

    public function list()
    {
        return view('admin.pages.order.index');
    }

    public function order_new_view()
    {
        return view('admin.pages.order.new');
    }


    public function order_confirmed_view()
    {
        return view('admin.pages.order.confirmed');
    }

    public function order_packed_view()
    {
        return view('admin.pages.order.packed');
    }

    public function order_sent_view()
    {
        return view('admin.pages.order.sent');
    }


    public function order_accepted_view()
    {
        return view('admin.pages.order.accepted');
    }

    public function order_end_view()
    {
        return view('admin.pages.order.end');
    }

    public function index()
    {
        $order = Order::with('user')->get();

        return response()->json([
            'data' => $order
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
            'id_user' => 'required',
            // 'id_product' => 'required',
            // 'invoice' => 'required',
            // 'sub_total' => 'required',
            // 'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(), 422
            );
        }

        $input = $request->all();

        $order = Order::create($input);

        // OrderDetail::create($input);

        for ($i = 0; $i < count($input['id_product']); $i++) {
            OrderDetail::create([
                'id_order' => $input['id'][$i],
                'id_product' => $input['id_product'][$i],
                'jumlah' => $input['jumlah'],
                'total' => $input['total'],
            ]);
        }

        return response()->json([
            'data' => $order
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return response()->json([
            'data' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(), 422
            );
        }

        $input = $request->all();

        $order->update($input);

        OrderDetail::where('id_order', $order['id'])->delete();

        for ($i = 0; $i < count($input['id_product']); $i++) {
            OrderDetail::create([
                'id_order' => $input['id'][$i],
                'id_product' => $input['id_product'][$i],
                'jumlah' => $input['jumlah'],
                'total' => $input['total'],
            ]);
        }

        return response()->json([
            'data' => $order
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return response()->json(['
        message' => 'success']);
    }

    public function order_new()
    {
        $order = Order::with('user')->where('status', 'Baru')->get();

        return response()->json(['message' => 'success', 'data' => $order]);
    }


    public function order_confirmed()
    {
        $order = Order::with('user')->where('status', 'Dikonfirmasi')->get();

        return response()->json(['message' => 'success', 'data' => $order]);
    }

    public function order_packed()
    {
        $order = Order::with('user')->where('status', 'Dikemas')->get();

        return response()->json(['message' => 'success', 'data' => $order]);
    }


    public function order_sent()
    {
        $order = Order::with('user')->where('status', 'Dikirim')->get();

        return response()->json(['message' => 'success', 'data' => $order]);
    }

    public function order_accepted()
    {
        $order = Order::with('user')->where('status', 'Diterima')->get();

        return response()->json(['message' => 'success', 'data' => $order]);
    }

    public function order_end()
    {
        $order = Order::with('user')->where('status', 'Selesai')->get();

        return response()->json(['message' => 'success', 'data' => $order]);
    }

    public function handle_status(Request $request, Order $order)
    {
        $order->update([
            'status' => $request->status
        ]);

        return response()->json(['message' => 'success', 'data' => $order]);
    }
}
