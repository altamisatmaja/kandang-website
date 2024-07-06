<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderPartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->partner = Auth::user();
            return $next($request);
        });
    }

    /**
     * View semua order
     */
    public function order()
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

        if ($partner) {
            $orders = Order::whereHas('orders_detail', function ($query) use ($partner) {
                $query->where('id_partner', $partner->id);
            })->with('user')->get();

            $allorders = [];

            foreach ($orders as $order) {
                $orderDetails = OrderDetail::with('product', 'partner')
                    ->where('id_order', $order->id)
                    ->where('id_partner', $partner->id)
                    ->get();

                if ($orderDetails->isNotEmpty()) {
                    $allorders[] = [
                        'order' => $order,
                        'order_details' => $orderDetails,
                    ];
                }
            }
        } else {
            $allorders = [];
        }

        return view('partner.pages.order.index', compact('partner', 'allorders'));
    }

    /**
     * View order baru
     */
    public function order_new_view()
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

        if ($partner) {
            $orders = Order::whereHas('orders_detail', function ($query) use ($partner) {
                $query->where('id_partner', $partner->id);
            })->with('user')->where('status', 'Baru')->get();

            $allorders = [];

            foreach ($orders as $order) {
                $orderDetails = OrderDetail::with('product', 'partner')
                    ->where('id_order', $order->id)
                    ->where('id_partner', $partner->id)
                    ->get();

                if ($orderDetails->isNotEmpty()) {
                    $allorders[] = [
                        'order' => $order,
                        'order_details' => $orderDetails,
                    ];
                }
            }
        } else {
            $allorders = [];
        }

        return view('partner.pages.order.new', compact('partner', 'allorders'));
    }

    /**
     * View order confirmerd
     */
    public function order_confirmed_view()
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

        if ($partner) {
            $orders = Order::whereHas('orders_detail', function ($query) use ($partner) {
                $query->where('id_partner', $partner->id);
            })->with('user')->where('status', 'Dikonfirmasi')->get();

            $allorders = [];

            foreach ($orders as $order) {
                $orderDetails = OrderDetail::with('product', 'partner')
                    ->where('id_order', $order->id)
                    ->where('id_partner', $partner->id)
                    ->get();

                if ($orderDetails->isNotEmpty()) {
                    $allorders[] = [
                        'order' => $order,
                        'order_details' => $orderDetails,
                    ];
                }
            }
        } else {
            $allorders = [];
        }

        return view('partner.pages.order.confirmed', compact('partner', 'allorders'));
    }

    /**
     * View order packed
     */
    public function order_packed_view()
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

        if ($partner) {
            $orders = Order::whereHas('orders_detail', function ($query) use ($partner) {
                $query->where('id_partner', $partner->id);
            })->with('user')->where('status', 'Dikemas')->get();

            $allorders = [];

            foreach ($orders as $order) {
                $orderDetails = OrderDetail::with('product', 'partner')
                    ->where('id_order', $order->id)
                    ->where('id_partner', $partner->id)
                    ->get();

                if ($orderDetails->isNotEmpty()) {
                    $allorders[] = [
                        'order' => $order,
                        'order_details' => $orderDetails,
                    ];
                }
            }
        } else {
            $allorders = [];
        }

        return view('partner.pages.order.packed', compact('partner', 'allorders'));
    }

    /**
     * View order sent
     */
    public function order_sent_view()
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

        if ($partner) {
            $orders = Order::whereHas('orders_detail', function ($query) use ($partner) {
                $query->where('id_partner', $partner->id);
            })->with('user')->where('status', 'Dikirim')->get();

            $allorders = [];

            foreach ($orders as $order) {
                $orderDetails = OrderDetail::with('product', 'partner')
                    ->where('id_order', $order->id)
                    ->where('id_partner', $partner->id)
                    ->get();

                if ($orderDetails->isNotEmpty()) {
                    $allorders[] = [
                        'order' => $order,
                        'order_details' => $orderDetails,
                    ];
                }
            }
        } else {
            $allorders = [];
        }

        return view('partner.pages.order.sent', compact('partner', 'allorders'));
    }

    /**
     * View order accepted
     */
    public function order_accepted_view()
    {
        $partner = Auth::user();

        $partner_id = Auth::user()->partner->id;

        $orders = Order::whereIn('id', function ($query) use ($partner_id) {
            $query
                ->select('id_order')
                ->from('orders_details')
                ->where('id_partner', $partner_id);
        })
            ->where('status', 'Diterima')
            ->with('orders_detail.product')
            ->get();
        return view('partner.pages.order.accepted', compact('partner', 'orders'));
    }

    /**
     * View order end
     */
    public function order_end_view()
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

        if ($partner) {
            $orders = Order::whereHas('orders_detail', function ($query) use ($partner) {
                $query->where('id_partner', $partner->id);
            })->with('user')->where('status', 'Selesai')->get();

            $allorders = [];

            foreach ($orders as $order) {
                $orderDetails = OrderDetail::with('product', 'partner')
                    ->where('id_order', $order->id)
                    ->where('id_partner', $partner->id)
                    ->get();

                if ($orderDetails->isNotEmpty()) {
                    $allorders[] = [
                        'order' => $order,
                        'order_details' => $orderDetails,
                    ];
                }
            }
        } else {
            $allorders = [];
        }

        return view('partner.pages.order.end', compact('partner', 'allorders'));
    }

    /**
     * Handling status new order to confirm
     */
    public function status_new_to_confirm(Request $request, $id)
    {
        try {
            $order = Order::find($id);

            if($order->status_pembayaran == 'Paid'){
                $order->status = 'Dikonfirmasi';
                $order->save();

                return redirect()->route('partner.order.confirmed')->with('success', 'Pesanan berhasil dikonfirmasi');
            }  else {
                return redirect()->route('partner.order.new')->with('error', 'Pesanan gagal dikonfirmasi dikarenakan belum dibayar oleh pembeli');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

    }

    /**
     * Handling status new confirm to packed
     */
    public function status_confirm_to_packed(Request $request, $id)
    {
        $order = Order::find($id);

        if($order){
            $order->status = 'Dikemas';
            $order->save();

            return redirect()->route('partner.order.packed')->with('success', 'Pesanan berhasil dikemas');
        }  else {
            return redirect()->route('partner.order.confirmed')->with('error', 'Pesanan gagal dikemas');
        }
    }

    /**
     * Handling status new packed to sent
     */
    public function status_packed_to_sent(Request $request, $id)
    {
        try {
            $order = Order::find($id);
            if($order){
                $order->status = 'Dikirim';
                $order->save();

                return redirect()->route('partner.order.packed')->with('success', 'Pesanan berhasil dikirim');
            }  else {
                return redirect()->route('partner.order.confirmed')->with('error', 'Pesanan gagal dikirim');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }

    }
}
