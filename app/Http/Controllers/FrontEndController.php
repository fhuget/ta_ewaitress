<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Foodmenu;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $foodmenus = Foodmenu::where('foodmenu_status',1)->get();

        return view('FrontEnd.include.home', compact('foodmenus'));
    }
    public function food_show($id)
    {
        $categoryFood = Foodmenu::where('category_id',$id)
                        ->where('foodmenu_status',1)
                        ->get();

        return view('FrontEnd.include.food',compact('categoryFood'));
    }
}
