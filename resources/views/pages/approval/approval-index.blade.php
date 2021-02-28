@extends('layouts.admin.index')

@section('content')
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
                    <th>Approve</th>
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
                    <th>Approve</th>
                    <th>Delete from list</th>
                </tr>
                </tfoot>
                <tbody>
                <?php $id = 0 ?>
                @foreach($approvals as $approval)
                    <tr>
                        <td>{{$id+=1}}</td>
                        <td>{{$approval->name}}</td>
                        <td>{{$approval->email}}</td>
                        <td>{{$approval->phone}}</td>
                        <td>{{$approval->address}}</td>
                        <td>{{$approval->admin}}</td>
                        <td>{{$approval->created_at}}</td>
                        <td>{{$approval->product_name}}</td>
                        <td>{{$approval->product_price}}</td>
                        <td>{{$approval->product_count}}</td>
                        <td><img src="{{asset('storage/'.$approval->product_image)}}" alt="" style="width: 50px"></td>
                        <td>{{$approval->status}}</td>
                        <td>
                            <form action="{{route('approval.update',$approval->id)}}" method="post">
                                @method('put')
                                {{csrf_field()}}
                                <input type="submit" value="Approve" class="btn btn-success" @if($approval->status === "approved") disabled @endif>
                            </form>
                        </td>

                        <td>
                            <form action="{{route('approval.destroy',$approval->id)}}" method="post">
                                @method('delete')
                                {{csrf_field()}}
                                <input type="submit" value="Delete" class="btn btn-danger" @if($approval->status === "unapproved") disabled @endif>
                            </form>
                        </td>
                    </tr>
                @endforeach



{{--                @foreach($carts as $cart)--}}
{{--                    <tr>--}}
{{--                        --}}{{--                        <td>{{$product->id}}</td>--}}
{{--                        <td>{{$cart->product_name}}</td>--}}
{{--                        <td><img src="{{asset('storage/'.$cart->product_image)}}" alt="" style="width: 80px; display: block; margin: auto"></td>--}}
{{--                        <td>{{$cart->product_price}}</td>--}}
{{--                        <td>{{$cart->product_count}}  <br><span style="color: slategray">(Max : 10)</span></td>--}}
{{--                        <td>--}}
{{--                            <form action="{{route('cart.update',$cart->id)}}" method="post">--}}
{{--                                @method('put')--}}
{{--                                {{csrf_field()}}--}}
{{--                                <input type="number" name="product_quantity">--}}
{{--                                <input type="submit" value="Update" class="btn btn-outline-danger">--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                        <td style="text-align: center">--}}
{{--                            <form action="{{route('cart.destroy',$cart->id)}}" method="post">--}}
{{--                                @method('delete')--}}
{{--                                {{csrf_field()}}--}}
{{--                                <input type="submit" value="Remove from cart" class="btn btn-outline-danger">--}}
{{--                            </form>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
