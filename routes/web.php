<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*====================Cart Start Here====================*/

Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index']);
Route::get('/category/food/show/{category_id}',[App\Http\Controllers\FrontEndController::class,'food_show'])->name('category_food');

Route::post('/add/cart',[App\Http\Controllers\cartController::class,'insert'])->name('add_to_cart');

Route::get('/cart/show',[App\Http\Controllers\cartController::class,'show'])->name('cart_show');

Route::get('/cart/remove/{rowId}',[App\Http\Controllers\cartController::class,'remove'])->name('remove_item');

Route::post('/cart/update/',[App\Http\Controllers\cartController::class,'update'])->name('update_cart');


/*====================Cart End Here====================*/

/*====================Checkout Start Here====================*/
Route::get('/checkout',[App\Http\Controllers\CheckOutController::class,'show'])->name('check_out');
Route::get('/checkout/payment',[App\Http\Controllers\CheckOutController::class,'payment'])->name('checkout_payment');
Route::post('/checkout/new/order',[App\Http\Controllers\CheckOutController::class,'order'])->name('new_order');
Route::get('/checkout/order/complete',[App\Http\Controllers\CheckOutController::class,'complete'])->name('order_complete');

/*====================Checkout End Here====================*/

/*====================Order Start Here====================*/
Route::get('/order/manage',[App\Http\Controllers\OrderController::class,'manageOrder'])->name('show_order');
Route::get('/order/delete/{order_id}',[App\Http\Controllers\OrderController::class,'removeOrder'])->name('order_remove');
Route::get('/order/invoice/{order_id}',[App\Http\Controllers\OrderController::class,'viewInvoice'])->name('view_order_invoice');
Route::get('/order/invoice/print/{order_id}',[App\Http\Controllers\OrderController::class,'printInvoice'])->name('print_invoice');
Route::get('/order/view/{order_id}',[App\Http\Controllers\OrderController::class,'viewOrder'])->name('view_order');

Route::get('/order/approved/{order_id}',[App\Http\Controllers\OrderController::class,'approved'])->name('approved_order');
Route::get('/order/disapproved/{order_id}',[App\Http\Controllers\OrderController::class,'disapproved'])->name('disapproved_order');

Route::get('/order/approvedPay/{order_id}',[App\Http\Controllers\OrderController::class,'approvedPayment'])->name('approved_payment');
Route::get('/order/disapprovedPay/{order_id}',[App\Http\Controllers\OrderController::class,'disapprovedPayment'])->name('disapproved_payment');

// Route::post('/order/update/',[App\Http\Controllers\OrderController::class,'update'])->name('update_order');

/*====================Order End Here====================*/

/*====================customer Start Here====================*/
Route::get('register/customer/',[App\Http\Controllers\CustomerController::class,'regis'])->name('signup_up');
Route::post('/register/customer/store',[App\Http\Controllers\CustomerController::class,'store'])->name('store_customer');

Route::get('login/customer/',[App\Http\Controllers\CustomerController::class,'login'])->name('login_in');
Route::post('logout/customer/',[App\Http\Controllers\CustomerController::class,'logout'])->name('log_out');
Route::post('login/customer/login',[App\Http\Controllers\CustomerController::class,'check'])->name('check_login');

Route::get('/delivery',[App\Http\Controllers\CustomerController::class,'delivery']);
Route::post('/delivery/store',[App\Http\Controllers\CustomerController::class,'save'])->name('store_delivery');
Route::get('/delivery/list',[App\Http\Controllers\CustomerController::class,'del_list'])->name('list_delivery');


/*====================customer End Here====================*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Backend


/*====================Category Start Here====================*/
Route::get('/category/add',[App\Http\Controllers\categoryController::class,'index'])->name('show_cate_table');
Route::post('/category/save',[App\Http\Controllers\categoryController::class,'save'])->name('cate_save');
Route::get('/category/manage',[App\Http\Controllers\categoryController::class,'manage'])->name('manage_cate');
Route::get('/category/active/{category_id}',[App\Http\Controllers\categoryController::class,'active'])->name('cate_active');
Route::get('/category/Inactive/{category_id}',[App\Http\Controllers\categoryController::class,'Inactive'])->name('Inactive_cate');
Route::get('/category/delete/{category_id}',[App\Http\Controllers\categoryController::class,'delete'])->name('cate_delete');
Route::post('/category/update',[App\Http\Controllers\categoryController::class,'update'])->name('cate_update');
/*====================Category End Here====================*/

/*====================Waitress Start Here====================*/
Route::get('/waitress/add',[App\Http\Controllers\waitressController::class,'index'])->name('show_wait_table');
Route::post('/waitress/save',[App\Http\Controllers\waitressController::class,'save'])->name('wait_save');
Route::get('/waitress/manage',[App\Http\Controllers\waitressController::class,'manage'])->name('manage_wait');
Route::get('/waitress/active/{waitress_id}',[App\Http\Controllers\waitressController::class,'active'])->name('wait_active');
Route::get('/waitress/Inactive/{waitress_id}',[App\Http\Controllers\waitressController::class,'Inactive'])->name('Inactive_wait');
Route::get('/waitress/delete/{waitress_id}',[App\Http\Controllers\categoryController::class,'delete'])->name('wait_delete');
Route::post('/waitress/update',[App\Http\Controllers\waitressController::class,'update'])->name('wait_update');
/*====================Waitress End Here====================*/

/*====================Foodmenu Start Here====================*/
Route::get('/foodmenu/add',[App\Http\Controllers\FoodmenuController::class,'index'])->name('show_food_table');
Route::post('/foodmenu/save',[App\Http\Controllers\FoodmenuController::class,'save'])->name('food_save');
Route::get('/foodmenu/manage',[App\Http\Controllers\FoodmenuController::class,'manage'])->name('manage_food');
Route::get('/foodmenu/active/{foodmenu_id}',[App\Http\Controllers\FoodmenuController::class,'active'])->name('food_active');
Route::get('/foodmenu/Inactive/{foodmenu_id}',[App\Http\Controllers\FoodmenuController::class,'Inactive'])->name('Inactive_food');
Route::get('/foodmenu/delete/{foodmenu_id}',[App\Http\Controllers\FoodmenuController::class,'delete'])->name('food_delete');
Route::post('/foodmenu/update',[App\Http\Controllers\FoodmenuController::class,'update'])->name('food_update');
/*====================Foodmenu End Here====================*/
