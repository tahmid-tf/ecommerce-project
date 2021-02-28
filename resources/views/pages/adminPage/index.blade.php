@extends('layouts.admin.index')

@section('content')
    <canvas id="myChart"></canvas>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            data: {
                labels: ['Admins  ({{$admin}})', 'Users  ({{$user}})', 'Product Advertisements  ({{$product}})', 'Total Orders  ({{$order}})', 'Approved Orders  ({{$approved}})', 'Pending Orders  ({{$unapproved}})', 'Cart saved by users  ({{$cart}})'],
                datasets: [{
                    label: 'Total',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [{{$admin}}, {{$user}}, {{$product}}, {{$order}}, {{$approved}}, {{$unapproved}}, {{$cart}}]
                }]
            },

            // Configuration options go here
            options: {}
        });
    </script>

@endsection



