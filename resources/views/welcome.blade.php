@extends('layouts.layout')

@section('header')
    <div class="top-div container">
        <div class="row">
            <div class="col-12">
                <p>{{ session('message') }}</p>
            </div>
            <div class="text-center col-12">
                <img class="img-fluid" src="img/header.svg" alt="Your Favourite Restaurants In One Place" srcset="">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 col-md-6">
                <p class="fs-3 slogan mt-5">Lo mejor en comida <span class="sloganYellow">de pequeños locales.</span> </p> 
                <p class="">Cuando tengas hambre, quieras descubrir nuevos lugares o apoyar a pequeños locales este es tu mejor lugar. Haz crecer tu pequeño negocio y eligé el plan que más se adapte a tus necesidades con Trinche.</p>
            </div>
            <div class="col-sm-12 col-md-6 align-self-center mb-5 ">
                <button type="button" class="btn-knowMore btn btn-primary">Conoce Más</button>
            </div>
        </div>
    </div>
@endsection