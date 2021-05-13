@extends('layouts.layout')

@section('header')
    <div class="top-div container-fluid">
        <div class="row">
            <div class="col-12">
                <p>{{ session('message') }}</p>
            </div>
            <div class="my-auto col-12 col-sm-6">
                <p class="fs-3 slogan mt-5">Best Food <span class="sloganYellow">of local restaurants.</span> </p> 
                <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur magni sint voluptatibus aliquam vitae praesentium sunt accusamus fugiat labore. Numquam voluptatem beatae corporis animi harum ab corrupti quia suscipit libero.</p>
                <button type="button" class="btn-knowMore btn btn-primary">Know More</button>
            </div>
        </div>
    </div>
@endsection