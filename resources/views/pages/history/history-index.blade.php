@extends('layouts.admin.index')

@section('content')

    <div>
        <a href="{{route('histories.delete')}}"><button class="btn btn-danger">Remove all history</button></a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Order From</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Role</th>
                    <th>Ordered Data</th>
                    <th>Product name</th>
                    <th>Product price</th>
                    <th>Quantity</th>
                    <th>Product Image</th>
                    <th>Status</th>
                    <th>Delete from list</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>id</th>
                    <th>Order From</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Role</th>
                    <th>Ordered Data</th>
                    <th>Product name</th>
                    <th>Product price</th>
                    <th>Quantity</th>
                    <th>Product Image</th>
                    <th>Status</th>
                    <th>Delete from list</th>
                </tr>
                </tfoot>
                <tbody>
                <?php $id = 0 ?>
                @foreach($histories as $history)
                    <tr>
                        <td>{{$id+=1}}</td>
                        <td>{{$history->name}}</td>
                        <td>{{$history->email}}</td>
                        <td>{{$history->phone}}</td>
                        <td>{{$history->address}}</td>
                        <td>{{$history->admin}}</td>
                        <td>{{$history->created_at}}</td>
                        <td>{{$history->product_name}}</td>
                        <td>{{$history->product_price}}</td>
                        <td>{{$history->product_count}}</td>
                        <td><img src="{{asset('storage/'.$history->product_image)}}" alt="" style="width: 50px"></td>
                        <td>{{$history->status}}</td>

                        <td>
                            <form action="{{route('history.destroy',$history->id)}}" method="post">
                                @method('delete')
                                {{csrf_field()}}
                                <input type="submit" value="Delete" class="btn btn-danger" @if($history->status === "unapproved") disabled @endif>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
