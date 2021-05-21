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

        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <span class="brand-name">trinche</span> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/restaurants">
                                <span class="brand-name">Restaurants</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/restaurants/create">
                                <span class="brand-name">Create</span> 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="main" style="height: 100%">
            @yield('header')

            @yield('restaurant')

            @yield('restaurantDetails')
        </div>
        
       

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#5E52AD" fill-opacity="1" d="M0,288L40,277.3C80,267,160,245,240,250.7C320,256,400,288,480,261.3C560,235,640,149,720,144C800,139,880,213,960,240C1040,267,1120,245,1200,213.3C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
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
                        Copyright, Ricardo's Food 2021
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>