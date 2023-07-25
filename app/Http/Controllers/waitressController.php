<?php

namespace App\Http\Controllers;

use App\Models\Waitress;
use Illuminate\Http\Request;

class waitressController extends Controller
{

   public function index()
    {
       return view('BackEnd.waitress.addWaitress');
    }

    public function save( Request $request)
    {
       $waitress = new Waitress();
       $waitress->waitress_name     = $request->waitress_name;
       $waitress->waitress_code     = $request->waitress_code;
       $waitress->waitress_password = $request->waitress_password;
       $waitress->waitress_status   = $request->waitress_status;  
       $waitress->save();

       return back()->with('sms','waitress Saved');
    }

    public function manage()
    {
       $waitresses = Waitress::all();

       return view('BackEnd.waitress.manageWaitress',compact('waitresses'));
    }

    public function active($waitress_id)
    {
       $waitress = Waitress::find($waitress_id);
       $waitress->waitress_status = 1;
       $waitress->save();
       return back();
    }

    public function Inactive($waitress_id)
    {
       $waitress = Waitress::find($waitress_id);
       $waitress->waitress_status = 0;
       $waitress->save();
       return back();
    }

    public function delete($waitress_id)
    {
       $waitress = Waitress::find($waitress_id);
       $waitress->delete();
       return back();
    }


   public function update(Request $request)
    {
       $waitress = Waitress::find($request->waitress_id);
       $waitress->waitress_name = $request->waitress_name;
       $waitress->save();

       return redirect('/waitress/manage')->with('sms','waitress updated');
    }
}
