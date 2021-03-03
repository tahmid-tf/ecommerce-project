@extends('layouts.admin.index')

@section('content')
    <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="form-group">
            <input type="text" value="{{$product->id}}" name="product_id" hidden>
            <label for="exampleInputEmail">File</label>
            <input type="file" class="form-control-file" id="post_image" placeholder="Enter product image" name="product_image" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
