@extends('layouts.admin.index')

@section('content')
    <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail">Title</label>
            <input type="text" class="form-control" id="" placeholder="Enter Product Name" name="title" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail">File</label>
            <input type="file" class="form-control-file" id="post_image" placeholder="Enter product image" name="slider_image" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
