<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class CategoryFrontController extends Controller
{
    public function index($name){
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
        $products = Product::all()->where('product_name','=',$name);
        return view('pages.sitePage.category-page',compact('products','cart','single_slider','sliders','categories'));
    }
}
