@extends('layouts.layout')

@section('restaurant')
    <div class="restaurants">
        @foreach ($restaurants as $restaurant)
            <div class="row">
                <p>Restaurante: {{$restaurant['name']}}</p>
                <p>categoria: {{$restaurant['category']}}</p>
            </div>
        @endforeach
    </div>
@endsection

