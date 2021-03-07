@extends('layouts.admin.index')

@section('content')
    <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail">Title</label>
            <input type="text" class="form-control" id="" placeholder="Enter Product Name" name="product_name" required value="{{$product->product_name}}">
        </div>

        <img src="{{$product->product_image}}" alt="" style="width: 150px">

        <div class="form-group">
            <label for="exampleInputEmail">File</label>
            <input type="file" class="form-control-file" id="post_image" placeholder="Enter product image" name="product_image">
        </div>

        <div class="form-group">
            <input type="number" step="0.01" class="form-control" id="" placeholder="Enter product price" name="product_price" required value="{{$product->product_price}}">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="" placeholder="Update product category" name="product_category" required value="{{$product->product_category}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
