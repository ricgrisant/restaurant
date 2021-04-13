<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            footer{
                text-align: center;
                background-color: #eee;
                padding: 20px;
            }
        </style>
    </head>
    <body class="antialiased">

        @yield('header')
        
        {{-- insert the content --}}
        @yield('welcome')

        <footer>
            Copyright, Ricardo's Food 2020
        </footer>
    </body>
</html>