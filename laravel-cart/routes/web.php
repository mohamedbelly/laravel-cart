<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CardController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',[pagesController::class,'index'])->name('home');

Route::get('/shop',[ProductController::class,'index'])->name('shop');
Route::get('/shop/{id}',[ProductController::class,'show'])->name('product');


Route::get('/cart',[CardController::class,'cart'])->name('cart');
Route::get('/add-to-cart/{id}',[CardController::class,'addToCart'])->name('addToCart');
Route::get('/delete-from-cart/{id}',[CardController::class,'delete'])->name('delete.cart');
