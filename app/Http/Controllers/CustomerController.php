<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Delivery;
use Illuminate\Http\Request;
use Session;

class CustomerController extends Controller
{
    public function show()
    {
        return view('FrontEnd.customer.register');
    }

    public function store(Request $request)
    {
        $customer = new Customer();

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone_no = $request->phone_no;
        $customer->password = bcrypt($request->password);
        $customer->save();

        $customer_id = $customer->customer_id;
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$customer->name);

        return redirect('/delivery');
    }
    public function regis ()
    {
      return view ('FrontEnd.customer.register');
    }

    public function login ()
    {
      return view ('FrontEnd.customer.login');
    }

    public function check (Request $request)
    {
      $customer = Customer::where('email', $request->email)->first();

      if(password_verify($request->password, $customer->password))
      {
        Session::put('customer_id', $customer->customer_id);
        Session::put('customer_name', $customer->name);

        return redirect('/delivery');
      }

    else
      {
            return redirect('/login/customer/')->with('sms','Password anda salah, mohon gunakan password yg benar');

      }
    }

    public function logout()
    {
      Session::forget('customer_id');
      Session::forget('customer_name');

      return redirect('http://localhost:8000');
    }


    public function delivery ()
    {
      $customer = Customer::find(Session::get('customer_id'));
      return view('FrontEnd.checkOut.delivery', compact('customer'));
    }

    public function save(Request $request)
    {
      $delivery = new Delivery();

      $delivery->name = $request->name;
      $delivery->email = $request->email;
      $delivery->phone_no = $request->phone_no;
      $delivery->nomeja = $request->nomeja;
      $delivery->save();

      Session::put('delivery_id', $delivery->id);

      return redirect()->route('checkout_payment');
    }

    public function del_list()
    {
      $deliveries = Delivery::all();

      return view('BackEnd.delivery.manageDelivery',compact('deliveries'));
    }

}
