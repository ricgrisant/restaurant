@extends('layouts.layout')

@section('restaurantDetails')
    <div class="restaurants mt-5">
        <p>{{$restaurantInfo->id}} - {{$restaurantInfo->name}}</p>
        <a href="/restaurants">Go Back To Restaurants</a>
    </div>
    <div class="text-center">
        <form action="/restaurants/{{$restaurantInfo->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
        
    </div>
@endsection