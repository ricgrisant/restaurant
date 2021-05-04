@extends('layouts.layout')

@section('restaurant')
    <div class="restaurants">
        @foreach ($restaurants as $restaurant)
            <div class="row">
                <p>Restaurant: {{$restaurant['name']}}</p>
                <p>category: {{$restaurant['category']}}</p>
                <a href="restaurants/{{$restaurant['id']}}"> See More</a>
            </div>
        @endforeach
    </div>
@endsection

