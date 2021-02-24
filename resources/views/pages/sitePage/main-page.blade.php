<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body>


    <div class="navbar-section">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">TF-STORE</a>
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
                            <a class="nav-link">Admin-Panel</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Cart(5)</a>
                        </li>

{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{auth()->logout()}}">Logout</a>--}}
{{--                            <form action="/logout" method="post">--}}
{{--                                {{csrf_field()}}--}}
{{--                                <input type="submit" value="Logout" class="nav-link">--}}
{{--                            </form>--}}
{{--                        </li>--}}

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



    <div class="slider-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://waltonbd.com/image/catalog/Banner/2020/september/sesion-9.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://waltonbd.com/image/catalog/home-page/slider/21-f-d.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://waltonbd.com/image/catalog/home-page/slider/superbrands-de.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <div class="main-content-section">
        <h5 class="available-products">Available Products</h5>
        <div class="main-content">
            <div class="row">

                @foreach($products as $product)

                <div class="col-md-3 col-sm-12 columns">
                    <div class="card cards-padding">
                        <img class="card-img-top main-img-width" src="{{$product->product_image}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->product_name}}</h5>
                            <p class="card-text">{{$product->product_price}}/-</p>
                            <a href="#" class="btn btn-info btn-width-cap show-info-button">Show Info</a>
                            <a href="#" class="btn btn-primary btn-width-cap">Add to cart</a>
                        </div>
                    </div>
                </div>

                @endforeach

                <div class="col-md-3 col-sm-12 columns">
                    <div class="card cards-padding">
                        <img class="card-img-top main-img-width" src="https://target.scene7.com/is/image/Target/GUEST_3345b6d4-692e-4aea-ba22-07a9181a0833?wid=488&hei=488&fmt=pjpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Table</h5>
                            <p class="card-text">950/-</p>
                            <a href="#" class="btn btn-info btn-width-cap show-info-button">Show Info</a>
                            <a href="#" class="btn btn-primary btn-width-cap">Add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 columns">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top main-img-width" src="https://incanda.co.za/wp-content/uploads/2018/10/LIN_7678-scaled.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Table</h5>
                            <p class="card-text">950/-</p>
                            <a href="#" class="btn btn-info btn-width-cap show-info-button">Show Info</a>
                            <a href="#" class="btn btn-primary btn-width-cap">Add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 columns">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top main-img-width" src="https://images-na.ssl-images-amazon.com/images/I/61nKGKkNHeL._SL1204_.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Chair</h5>
                            <p class="card-text">950/-</p>
                            <a href="#" class="btn btn-info btn-width-cap show-info-button">Show Info</a>
                            <a href="#" class="btn btn-primary btn-width-cap">Add to cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 columns">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top main-img-width" src="https://images-na.ssl-images-amazon.com/images/I/61nKGKkNHeL._SL1204_.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Chair</h5>
                            <p class="card-text">950/-</p>
                            <a href="#" class="btn btn-info btn-width-cap show-info-button">Show Info</a>
                            <a href="#" class="btn btn-primary btn-width-cap">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<div>
    <x-footer></x-footer>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
