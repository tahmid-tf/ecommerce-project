@extends('layouts.admin.index')

@section('content')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Advertisement Date</th>
                    <th>Update Advertisement</th>
                    <th>Delete Advertisement</th>
                    <th>Add extra images</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Advertisement Date</th>
                    <th>Update Advertisement</th>
                    <th>Delete Advertisement</th>
                    <th>Add extra images</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_price}}</td>
                        <td><img src="{{asset('storage/'.$product->product_image)}}" alt="" style="width: 150px"></td>
                        <td>{{$product->created_at->diffForHumans()}}</td>
                        <td style="text-align: center"><a href="{{route('product.edit',$product->id)}}"><button class="btn btn-outline-primary">Update</button></a></td>
                        <td style="text-align: center">
                            <form action="{{route('product.destroy',$product->id)}}" method="post">
                                @method('delete')
                                {{csrf_field()}}
                                <input type="submit" value="Delete" class="btn btn-outline-danger">
                            </form>
                        </td>
                        <td style="text-align: center"><a href="#"><button class="btn btn-outline-info">Add</button></a></td>
{{--                        <td>{{$post->created_at}}</td>--}}

{{--                        <td>--}}
{{--                            <a href="{{route('post.edit',$post->id)}}"><button class="btn btn-primary" @cannot('update',$post) disabled @endcannot>Update</button></a>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <form action="{{route('post.delete',$post->id)}}" method="post">--}}
{{--                                @method('delete')--}}
{{--                                {{csrf_field()}}--}}
{{--                                <input type="submit" value="Delete" class="btn btn-danger" @cannot('update',$post) disabled @endcannot>--}}
{{--                            </form>--}}
{{--                        </td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
