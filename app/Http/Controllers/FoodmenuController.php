<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Foodmenu;
use DB;

class FoodmenuController extends Controller
{
    public function index()
    {
        $categories = Category::where('category_status', 1)->get();
        return view('BackEnd.foodmenu.addFoodmenu', compact('categories'));
    }

    public function save( Request $request)
    {
        $imgName = $request->file('foodmenu_image');
        $image = $imgName->getClientOriginalName();
        $directory = 'BackEndSourceFile/foodmenu_img/';
        $imgUrl = $directory.$image;
        $imgName->move($directory,$image);

       $foodmenu = new Foodmenu();
       $foodmenu->foodmenu_name     = $request->foodmenu_name;
       $foodmenu->category_id       = $request->category_id;
       $foodmenu->foodmenu_detail   = $request->foodmenu_detail;
       $foodmenu->foodmenu_image    = $imgUrl;
       $foodmenu->foodmenu_status   = $request->foodmenu_status;
       $foodmenu->full_price        = $request->full_price;

       $foodmenu->save();

       return back()->with('sms','Data Saved');
    }

    public function manage()
    {
        $categories = Category::where('category_status', 1) ->get();

        $foodmenus = DB::table('foodmenus')
                ->join('categories','foodmenus.category_id','=','categories.category_id')
                ->select('foodmenus.*','categories.category_name')
                ->get();


       return view('BackEnd.foodmenu.manageFoodmenu',compact('foodmenus','categories'));
    }

    public function active($foodmenu_id)
    {
       $foodmenu = Foodmenu::find($foodmenu_id);
       $foodmenu->foodmenu_status = 1;
       $foodmenu->save();
       return back();
    }

    public function Inactive($foodmenu_id)
    {
       $foodmenu = Foodmenu::find($foodmenu_id);
       $foodmenu->foodmenu_status = 0;
       $foodmenu->save();
       return back();
    }


    public function delete($foodmenu_id)
    {
       $foodmenu = Foodmenu::find($foodmenu_id);
       $foodmenu->delete();
       return back();
    }


   public function update(Request $request)
    {

      $foodmenu = Foodmenu::find($request->foodmenu_id);

      $img_main = $request->file('foodmenu_image');

      if ($img_main)
      {

        $img_name = $img_main->getClientOriginalName();
        $directory = 'BackEndSourceFile/foodmenu_img/';
        $imgUrl = $directory.$img_name;
        $img_main->move($directory,$img_name);

        $old_img = $foodmenu['foodmenu_image'];
        if (file_exists($old_img))
        {
          unlink($old_img);
        }

        $foodmenu->foodmenu_name = $request->input('foodmenu_name');
        $foodmenu->category_id = $request->input('category_id');
        $foodmenu->foodmenu_detail = $request->input('foodmenu_detail');
        $foodmenu->foodmenu_image = $imgUrl;
        $foodmenu->full_price = $request->input('full_price');
      }

      else
      {
        $foodmenu->foodmenu_name = $request->foodmenu_name;
        $foodmenu->category_id = $request->category_id;
        $foodmenu->foodmenu_detail = $request->foodmenu_detail;
        $foodmenu->full_price = $request->full_price;
      }
      $foodmenu->update();
      return back();

    }
}
