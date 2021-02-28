<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainpageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\HistoryController;

Auth::routes();

Route::get('/',[MainpageController::class,'index']);
Route::get('/products/{id}',[MainpageController::class,'show'])->name('products.show');

Route::resource('product',ProductController::class);



Route::middleware(['auth','admin'])->group(function (){
    Route::resource('admin',AdminController::class);

    Route::resource('approval',ApprovalController::class);
    Route::get('approvals/add',[ApprovalController::class,'add'])->name('approval.add');
    Route::get('approvals/delete',[ApprovalController::class,'deleteAll'])->name('approval.delete');

    Route::resource('history',HistoryController::class);
    Route::get('histories/delete',[HistoryController::class,'deleteAll'])->name("histories.delete");


});

Route::middleware(['auth'])->group(function (){
    Route::resource('cart',CartController::class);
    Route::get('add/{id}',[CartController::class,'add'])->name('cart.add');
});


//Route::get('test',function (){
//    $products = \App\Models\Product::all()->sum('product_price');
//    return $products;
//});
