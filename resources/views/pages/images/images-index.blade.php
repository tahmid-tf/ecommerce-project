@extends('layouts.admin.index')

@section('content')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Related Image</th>
                    <th>Created_at</th>
                    <th>Update</th>
                    <th>Delete</th>

                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>Related Image</th>
                    <th>Created_at</th>
                    <th>Update</th>
                    <th>Delete</th>

                </tr>
                </tfoot>
                <tbody>
                <?php $id = 0 ?>
                @foreach($products_image as $image)
                    <tr>
                        <td>{{$id += 1}}</td>
                        <td><img src="{{asset('storage/'.$image->images)}}" alt="" style="width: 150px"></td>
                        <td>{{$image->created_at}}</td>
                        <td><a href="{{route('image.edit',$image->id)}}">Update</a></td>
                        <td style="text-align: center">
                            <form action="{{route('image.destroy',$image->id)}}" method="post">
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
