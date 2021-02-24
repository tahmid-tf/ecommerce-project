@extends('layouts.admin.index')

@section('content')
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail">Title</label>
            <input type="text" class="form-control" id="" placeholder="Enter Product Name" name="product_name" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail">File</label>
            <input type="file" class="form-control-file" id="post_image" placeholder="Enter product image" name="product_image" required>
        </div>

        <div class="form-group">
            <input type="number" step="0.01" class="form-control" id="" placeholder="Enter product price" name="product_price" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
