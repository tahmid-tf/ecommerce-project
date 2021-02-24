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
    <title>Document</title>
</head>
<body>


{{--nav section--}}

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
                        <a class="nav-link" href="#">Cart(5)</a>
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

{{--single search section--}}

<section>
    <div class="show-info-padding">
        <div class="row">
            <div class="col-md-3">
                <div class="card cards-padding">
                    <img class="card-img-top main-img-width" src="https://static8.depositphotos.com/1022715/834/i/950/depositphotos_8346493-stock-photo-wooden-chair-over-white-with.jpg" alt="Card image cap">
                </div>
            </div>

            <div class="col-md-9">
                <div class="card-body" style="margin-top: 50px">
                    <h5 class="card-title" style="text-align: center">Chair</h5>
                    <p class="card-text" style="text-align: center">950/-</p>
                    <a href="#" class="btn btn-primary btn-width-cap">Add to cart</a>
                </div>
            </div>
        </div>

        <div class="row sample-img-padding">
                <div class="col-md-2 columns">
                    <div class="card cards-padding sample-img-width">
                        <img class="card-img-top main-img-width" src="https://static8.depositphotos.com/1022715/834/i/950/depositphotos_8346493-stock-photo-wooden-chair-over-white-with.jpg" alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-2 columns">
                    <div class="card cards-padding sample-img-width">
                        <img class="card-img-top main-img-width" src="https://static8.depositphotos.com/1022715/834/i/950/depositphotos_8346493-stock-photo-wooden-chair-over-white-with.jpg" alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-2 columns">
                    <div class="card cards-padding sample-img-width">
                        <img class="card-img-top main-img-width" src="https://static8.depositphotos.com/1022715/834/i/950/depositphotos_8346493-stock-photo-wooden-chair-over-white-with.jpg" alt="Card image cap">
                    </div>
                </div>



        </div>
    </div>

</section>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
