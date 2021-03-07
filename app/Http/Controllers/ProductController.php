<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //will show all the available products
        $products = Product::all();
        return view('pages.adminPage.products.index-product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.adminPage.products.add-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = \request()->validate([
            'product_name' => 'required',
            'product_image' => 'file',
            'product_price' => 'required',
            'product_category' => 'required'
        ]);

        if(request('product_image')){
            $inputs['product_image'] = \request('product_image')->store('images');
        }

        Product::create($inputs);
        return redirect()->route('product.index');
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
    public function edit(Product $product)
    {
        return view('pages.adminPage.products.edit-product',compact('product'));
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
        $product = Product::find($id);

        $inputs = \request()->validate([
            'product_name' => 'required',
            'product_image' => 'file',
            'product_price' => 'required',
            'product_category' => 'required'
        ]);

        if(request('product_image')){
            $inputs['product_image'] = \request('product_image')->store('images');
        }else{
            $inputs['product_image'] = $product->product_image;
        }

        $product->whereId($id)->update($inputs);
        return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->image) {
            $images = $product->image;

            foreach ($images as $image) {

                if (Storage::disk('public')->exists($image->images)) {
                    $image = 'storage/' . $image->images;
                    unlink($image);
                }
                $image->whereId($image->id)->delete();

            }
        }

        if (Storage::disk('public')->exists($product->product_image)) {
            $image = 'storage/' . $product->product_image;
            unlink($image);
        }

        $product->delete();

        return redirect()->route('product.index');
    }

}
