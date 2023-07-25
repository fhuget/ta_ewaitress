<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Delivery;
use App\Models\Payment;
use App\Models\OrderDetail;
use PDF;
use DB;

class OrderController extends Controller
{
    public function manageOrder()
    {
      $orders = DB::table('orders')
      ->join('customers','orders.customer_id','=', 'customers.customer_id')
      ->join('payments','orders.order_id','=', 'payments.order_id')
      ->select('orders.*', 'customers.name','payments.payment_type','payments.payment_status')
      ->latest()->get();

      return view('BackEnd.Order.manage', compact('orders'));
    }

    public function viewOrder($order_id)
    {
      $order = Order::find($order_id);
      $customer = Customer::find($order->customer_id);
      $delivery = Delivery::find($order->delivery_id);
      $payment = payment::where('order_id', $order->order_id)->first();
      $order_details = OrderDetail::where('order_id',  $order->order_id)->get();

      return view('BackEnd.Order.view_order', compact('order', 'customer', 'delivery', 'payment', 'order_details'));
    }

    public function viewInvoice($order_id)
    {
      $order = Order::find($order_id);
      $customer = Customer::find($order->customer_id);
      $delivery = Delivery::find($order->delivery_id);
      $payment = payment::where('order_id', $order->order_id)->first();
      $order_details = OrderDetail::where('order_id', $order->order_id)->get();

      return view('BackEnd.Order.view_order_invoice', compact('order', 'customer', 'delivery', 'payment', 'order_details'));
    }

    public function printInvoice($order_id)
    {
      $order = Order::find($order_id);
      $customer = Customer::find($order->customer_id);
      $delivery = Delivery::find($order->delivery_id);
      $payment = payment::where('order_id', $order->order_id)->first();
      $order_details = OrderDetail::where('order_id', $order->order_id)->get();

      $pdf = PDF::loadView('BackEnd.Order.print_invoice', compact('order', 'customer', 'delivery', 'payment', 'order_details'));

      return $pdf->stream('StrukPemesanan.pdf');
    }


    public function removeOrder($order_id)
    {
      $order = Order::find($order_id);
      $order->delete();

      return back()->with('sms', 'Order deleted successfully');
    }

    public function approved($order_id)
    {
        $order = Order::find($order_id);
        $order->order_status = "Diantar";
        $order->save();
        return back();
    }

    public function disapproved($order_id)
    {
        $order = Order::find($order_id);
        $order->order_status = "Belum Diantar";
        $order->save();
        return back();
    }

    public function approvedPayment($order_id)
    {
        $payment = Payment::find($order_id);
        $payment ->payment_status = "Lunas";
        $payment->save();
        return back();
    }

    public function disapprovedPayment($order_id)
    {
        $payment = Payment::find($order_id);
        $payment->payment_status = "Belum Lunas";
        $payment->save();
        return back();
    }

}
