@extends('layouts.admin.index')

@section('content')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Update Category</th>
                    <th>Delete Category</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Update Category</th>
                    <th>Delete Category</th>
                </tr>
                </tfoot>
                <tbody>
                <?php $id = 0 ?>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$id += 1}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                        <td style="text-align: center"><a href="{{route('category.edit',$category->id)}}"><button class="btn btn-outline-primary">Update</button></a></td>
                        <td style="text-align: center">
                            <form action="{{route('category.destroy',$category->id)}}" method="post">
                                @method('delete')
                                {{csrf_field()}}
                                <input type="submit" value="Delete" class="btn btn-outline-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
