


<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;

    Route::get('/',[AdminController::class,'index'] )->name('dashbord');


    // Route::group(function () {
    //     Route::get('/product/index',[ProductController::class,'index'] )->name('admin.product.index');
    //     Route::get('/product/create',[ProductController::class,'create'] )->name('admin.product.create');
    //     Route::post('/product/create',[ProductController::class,'store'] )->name('admin.product.store');
    //     Route::get('/product/update/{product}',[ProductController::class,'edit'] )->name('admin.product.edit');
    //     Route::put('/product/update/{product}',[ProductController::class,'update'] )->name('admin.product.update');
    //     Route::delete('/product/delete/{product}',[ProductController::class,'delete'] )->name('admin.product.delete');
    // });




    Route::middleware('admin')->group(function () {
      Route::get('/category/index',[CategoryController::class,'index'] )->name('admin.category.index');
    Route::get('/category/create',[CategoryController::class,'create'] )->name('admin.category.create');
    Route::post('/category/create',[CategoryController::class,'store'] )->name('admin.category.store');
    Route::get('/category/update/{category}',[CategoryController::class,'edit'] )->name('admin.category.edit');
    Route::put('/category/update/{category}',[CategoryController::class,'update'] )->name('admin.category.update');
    Route::delete('/category/delete/{category}',[CategoryController::class,'delete'] )->name('admin.category.delete');



    Route::get('/user',[UserController::class,'index'] )->name('admin.user.index');
    Route::get('/user/edit/{user}',[UserController::class,'edit'] )->name('admin.user.edit');
    Route::put('/user/edit/{user}',[UserController::class,'update'] )->name('admin.user.update');
    Route::delete('/user/delete/{user}',[UserController::class,'delete'] )->name('admin.user.delete');

    });





