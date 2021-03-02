@extends('layouts.admin.index')

@section('content')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Update Slider</th>
                    <th>Delete Slider</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Update Slider</th>
                    <th>Delete Slider</th>
                </tr>
                </tfoot>
                <tbody>
                <?php $id = 0 ?>
                @foreach($sliders as $slider)
                    <tr>
                        <td>{{$id += 1}}</td>
                        <td>{{$slider->title}}</td>
                        <td><img src="{{asset('storage/'.$slider->slider_image)}}" alt="" style="width: 150px"></td>
                        <td>{{$slider->created_at}}</td>
                        <td>{{$slider->updated_at}}</td>
                        <td style="text-align: center"><a href="{{route('slider.edit',$slider->id)}}"><button class="btn btn-outline-primary">Update</button></a></td>
                        <td style="text-align: center">
                            <form action="{{route('slider.destroy',$slider->id)}}" method="post">
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
