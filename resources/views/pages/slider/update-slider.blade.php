@extends('layouts.admin.index')

@section('content')
    <form action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail">Title</label>
            <input type="text" class="form-control" id="" placeholder="Enter Product Name" name="title" required value="{{$slider->title}}">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail">File</label>
            <input type="file" class="form-control-file" id="post_image" placeholder="Enter product image" name="slider_image" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
