<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $search = request('search');

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
        $products = Product::where('product_name','like','%'.$search.'%')->paginate(20);
        return view('pages.sitePage.main-page',compact('products','cart','single_slider','sliders','categories'));
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
