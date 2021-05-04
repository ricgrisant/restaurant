@extends('layouts.layout')

@section('restaurantDetails')
    <div class="restaurants">
        <p>{{$restaurantInfo->id}} - {{$restaurantInfo->name}}</p>
        <a href="/restaurants">Go Back To Restaurants</a>
    </div>
@endsection