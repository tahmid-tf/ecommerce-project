@extends('layouts.admin.index')

@section('content')
    <form action="{{route('image.update',$image->id)}}" method="post" enctype="multipart/form-data">
        @method('put')
        {{csrf_field()}}

        <div class="form-group">
            <input type="text" value="{{$image->id}}" name="product_id" hidden>
            <label for="exampleInputEmail">File</label>
            <input type="file" class="form-control-file" id="post_image" placeholder="Enter product image" name="product_image" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
