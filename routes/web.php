<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


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

Route::get('/',[IndexController::class,'index'] );
Route::get('/cart',[CartController::class,'index'])->name('cart.index');

Route::post('/cart/add/{product}',[CartController::class,'add'])->name('cart.add');
Route::delete('/cart/delete/{product}',[CartController::class,'delete'])->name('cart.delete');
Route::post('/payment',[PaymentController::class,'payment'])->name('payment');
Route::get('/payment/callback',[PaymentController::class,'callback'])->name('payment.callback');



Route::prefix('product')->group(function () {
    Route::get('/',[ProductController::class,'index'] )->name('product.index');
    Route::get('/{product}',[ProductController::class,'show'] )->name('product.show');

    // Route::get('/{product}',[ProductController::class,'show'] )->name('product.show');




});
Route::get('/category/{category}',[CategoryController::class,'show'] )->name('category.show');


