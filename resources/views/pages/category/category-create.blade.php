@extends('layouts.admin.index')

@section('content')
    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail">Category Name</label>
            <input type="text" class="form-control" id="" placeholder="Enter Product Name" name="name" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
