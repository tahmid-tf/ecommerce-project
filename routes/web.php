<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainpageController;
use App\Http\Controllers\AdminController;

Auth::routes();

Route::get('/',[MainpageController::class,'index']);
Route::get('/products/{id}',[MainpageController::class,'show'])->name('products.show');

Route::resource('product',ProductController::class);



Route::middleware(['auth','admin'])->group(function (){
    Route::resource('admin',AdminController::class);
});
