<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Styles --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="{{asset('css/main.css')}} ">
    </head>
    <body class="antialiased">

        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <span class="brand-name">trinche</span> 
                </a>
            </div>
        </nav>

        @yield('header')

        @yield('restaurant')

        @yield('restaurantDetails')

        <footer>
            <div class="container">
                <div class="row redes">
                    <div class="col m-2">
                        <i class="fab fa-instagram fa-lg"></i>
                    </div>
                    <div class="col m-2">
                        <i class="fab fa-facebook fa-lg"></i>
                    </div>
                    <div class="col m-2">
                        <i class="fab fa-twitter fa-lg"></i>
                    </div>
                </div>

                <div class="row">
                    <div class="col m-auto">
                        Copyright, Ricardo's Food 2020
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>