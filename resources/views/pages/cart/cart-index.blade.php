<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}">
    <title>Document</title>
</head>
<body>

{{--nav section--}}

<div class="navbar-section">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">TF-STORE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto nav-item-margin">
                @if(!auth()->user())
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link">{{auth()->user()->name}}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.index')}}">Admin-Panel</a>
                    </li>
                @endif
            </ul>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            @if(auth()->user())
                <div class="logout">
                    <form action="/logout" method="post" class="form-inline my-2 my-lg-0">
                        {{csrf_field()}}
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
                    </form>
                </div>
            @endif

        </div>
    </nav>
</div>

<div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
{{--                    <th>id</th>--}}
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Increase Quantity</th>
                    <th>Remove from cart</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
{{--                    <th>id</th>--}}
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Increase Quantity</th>
                    <th>Remove from cart</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($carts as $cart)
                    <tr>
{{--                        <td>{{$product->id}}</td>--}}
                        <td>{{$cart->product_name}}</td>
                        <td><img src="{{asset('storage/'.$cart->product_image)}}" alt="" style="width: 80px; display: block; margin: auto"></td>
                        <td>{{$cart->product_price}}</td>
                        <td>{{$cart->product_count}}  <br><span style="color: slategray">(Max : 10)</span></td>
                        <td>
                            <form action="{{route('cart.update',$cart->id)}}" method="post">
                                @method('put')
                                {{csrf_field()}}
                                <input type="number" name="product_quantity">
                                <input type="submit" value="Update" class="btn btn-outline-danger">
                            </form>
                        </td>
                        <td style="text-align: center">
                            <form action="{{route('cart.destroy',$cart->id)}}" method="post">
                                @method('delete')
                                {{csrf_field()}}
                                <input type="submit" value="Remove from cart" class="btn btn-outline-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>

<div class="cart-div">
    <h4>Total Price : {{$carts_total_price}}</h4>
    <a href="{{route('approval.add')}}"><button class="btn btn-success cart-buttton">Confirm Order</button>
    </a>
</div>


{{-- footer --}}

<div>
    <x-footer></x-footer>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>
<!-- Page level plugins -->
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>
</body>
</html>
