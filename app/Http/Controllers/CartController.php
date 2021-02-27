<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = auth()->user()->cart;
        $carts_total_price = auth()->user()->cart()->sum('product_price');
        return view('pages.cart.cart-index',compact('carts','carts_total_price'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function add($id){
        $product = Product::find($id);
        $inputs = [];
        $inputs['product_name'] = $product->product_name;
        $inputs['product_price'] = $product->product_price;
        $inputs['product_image'] = $product->product_image;

        auth()->user()->cart()->create($inputs);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cart = auth()->user()->cart()->where('id',$id)->get()->first();

        if (\request('product_quantity') && \request('product_quantity') >= 1 && \request('product_quantity') <= 10) {
            $inputs = [];
            $inputs['product_count'] = \request('product_quantity');
            $inputs['product_price'] = (   ($cart->product_price / $cart->product_count) * (\request('product_quantity'))  );
            $cart->update($inputs);
            return back();
        }else{
            return back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        auth()->user()->cart()->where('id',$id)->delete();
        return back();
    }
}
