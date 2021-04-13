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
        </style>
    </head>
    <body>
    <div class="md:container md:mx-auto">
        <div class="title mx-auto content-center">
            Menu
            <p>
                {{$test}}
            </p>

            @if($test === 'Hamburgers')
                <p>This is the hamburgers menu </p>
            @else
                <p>This is not the hamburgers menu</p>
            @endif
        </div>
    </div>
    </body>
</html>
