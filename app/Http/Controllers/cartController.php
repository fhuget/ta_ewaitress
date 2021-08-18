<?php

namespace App\Http\Controllers;

use App\Models\Foodmenu;
use Illuminate\Http\Request;
use Cart;
use Alert;

class cartController extends Controller
{
    public function insert(Request $request)
    {
        $foodmenus = Foodmenu::where('foodmenu_id', $request->foodmenu_id)->first();

        Cart::add([
            'id' => $request->foodmenu_id,
            'qty' => $request->qty,
            'name' => $foodmenus->foodmenu_name,
            'price' => $foodmenus->full_price,
            'weight' => 550,
            'options' =>
        [
            'image' => $foodmenus->foodmenu_image

        ],

        ]);

        return redirect()->route('cart_show')->with('');
        Alert::success('Success Message','Pesanan Anda sudah masuk');
    }

    public function show()
    {
            $CartFood = Cart::content();


            return view('FrontEnd.cart.show', compact('CartFood'));

    }

    public function update(Request $request)
    {
            Cart::update($request->rowId, $request->qty);


            return back();

    }

    public function remove($rowId)
    {
            Cart::remove($rowId);


            return back();

    }
}
