<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Cart;
use Session;
use App\Models\Foodmenu;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\Customer;


class CheckOutController extends Controller
{
    public function show()
    {
        $CartFood = Cart::content();

        return view('FrontEnd.checkOut.CheckOutField', compact('CartFood'));
    }
    public function payment()
    {
      return view('FrontEnd.checkOut.checkout_payment');
    }
    public function order(Request $request)
    {

      $paymentType = $request->payment_type;

      $order = new Order();
      $order->customer_id = Session::get('customer_id');
      $order->delivery_id = Session::get('delivery_id');
      $order->order_total = Session::get('sum');
      $order->save();

      $payMent = new payment();
      $payMent->order_id = $order->order_id;
      $payMent->payment_type = $paymentType;
      $payMent->save();

      $CartDish = Cart::content();

      foreach ($CartDish as $cart) {

        $orderDetail = new OrderDetail();
        $orderDetail->order_id = $order->order_id;
        $orderDetail->foodmenu_id = $cart->id;
        $orderDetail->foodmenu_name = $cart->name;
        $orderDetail->foodmenu_price = $cart->price;
        $orderDetail->foodmenu_qty = $cart->qty;
        $orderDetail->save();

        Cart::destroy();

        return redirect('checkout/order/complete');
      }

    }

    public function complete()
    {
      return view('FrontEnd.checkOut.order_complete');
    }
}
