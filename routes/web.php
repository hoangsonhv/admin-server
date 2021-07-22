<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserContrller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MessengerController;

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
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect("/");
})->name('dashboard');

Route::get("/api",function (){
    return view("test");
});

Route::get('/',[HomeController::class,'show']);

Route::get("new-product",[HomeController::class,"newProduct"]);

Route::get("sale-product",[HomeController::class,"saleProduct"]);

Route::get("search",[HomeController::class,"searchItem"]);

Route::get("products/add-to-cart/{id}",[HomeController::class,"addToCart"]);

Route::get("product-type/{id}",[HomeController::class,"getProductType"]);

Route::get("shopping-cart",[HomeController::class,"shoppingCart"])->name("shoppingCart");

Route::get("contact-us",[HomeController::class,"contacts"]);

Route::get("about-us",[HomeController::class,"about"]);

Route::get("product-detail/{id}",[HomeController::class,"productDetail"]);

Route::get("delete-cart/{id}",[HomeController::class,"deleteCart"]);

Route::middleware("auth")->group(function(){

    Route::get("clear-cart",[HomeController::class,"clearCart"]);

    Route::get("update-cart/{id}",[HomeController::class,"updateCart"]);

    Route::get("checkout",[HomeController::class,"checkOut"]);

    Route::post("checkout",[HomeController::class,"placeOrder"]);

    Route::post("product-detail/{id}",[HomeController::class,"createComment"]);

    Route::post("contact-us",[MessengerController::class,"sendMessage"]);

    Route::get("teams",[HomeController::class,"listTeam"]);
});

