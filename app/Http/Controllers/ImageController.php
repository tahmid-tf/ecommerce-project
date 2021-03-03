<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function add($id){
        $product = Product::find($id);
        return view('pages.images.images-add',compact('product'));
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
        $inputs = [];
        $id = request('product_id');

        $product = Product::find($id);

        if(request('product_image')){
            $inputs['images'] = \request('product_image')->store('images');
        }
        $product->image()->create($inputs);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products_image = Product::find($id)->image;
        return view('pages.images.images-index',compact('products_image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::find($id);
        return view('pages.images.images-update',compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = [];
        $id = request('product_id');

        $image = Image::find($id);


        if(request('product_image')){
            $inputs['images'] = \request('product_image')->store('images');
        }else{
            $inputs['images'] = $image->product_image;
        }
        $image->whereId($id)->update($inputs);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();

        if (Storage::disk('public')->exists($image->images)) {
            $image = 'storage/' . $image->images;
            unlink($image);
        }
        return redirect()->back();
    }
}
