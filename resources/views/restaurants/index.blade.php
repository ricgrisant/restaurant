@extends('layouts.layout')

@section('restaurant')
    <div class="row">
    {{-- if delete action was campleed successfully --}}
    @if (session('deleteMessage'))
        <div class="alert alert-success alert-dismissible text-center fade show" role="alert">
            {{ session('deleteMessage') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    </div>
    <div class="restaurants mt-5">
        @foreach ($restaurants as $restaurant)
            <div class="row">
                <p>Restaurant: {{$restaurant['name']}}</p>
                <p>category: {{$restaurant['category']}}</p>
                <a href="restaurants/{{$restaurant['id']}}"> See More</a>
            </div>
        @endforeach
    </div>
@endsection

