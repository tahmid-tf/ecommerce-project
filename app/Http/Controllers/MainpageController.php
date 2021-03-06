<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class MainpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sliders = Slider::all();
        $categories = Category::all();

        if (Slider::all()->first()){
            $single_slider = Slider::all()->first();
            $single_slider->active_status = "active";
            $single_slider->save();
        }else{
            $inputs = [];
            $inputs['title'] = "Test title";
            $inputs['slider_image'] = 'https://wallpaperaccess.com/full/2637581.jpg';
            $inputs['active_status'] = "active";
            Slider::create($inputs);
        }

        if (auth()->user()){
            $cart = auth()->user()->cart()->count();
        }else{
            $cart = 0;
        }
        $products = Product::all();
        return view('pages.sitePage.main-page',compact('products','cart','single_slider','sliders','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (auth()->user()){
            $cart = auth()->user()->cart()->count();
        }else{
            $cart = 0;
        }
        $product = Product::find($id);
        $product_relation = Product::find($id)->image;
        return view('pages.sitePage.show-info',compact('product','cart','product_relation'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
