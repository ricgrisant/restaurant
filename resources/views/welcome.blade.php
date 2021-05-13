@extends('layouts.layout')

@section('header')
    <div class="top-div container-fluid">
        <div class="row">
            <div class="col-12">
                <p>{{ session('message') }}</p>
            </div>
            <div class="my-auto col-12 col-sm-12 col-md-6 order-2 order-sm-2 order-md-1">
                <p class="fs-3 slogan mt-5">Best Food <span class="sloganYellow">of local restaurants.</span> </p> 
                <p class="top-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur magni sint voluptatibus aliquam vitae praesentium sunt accusamus fugiat labore. Numquam voluptatem beatae corporis animi harum ab corrupti quia suscipit libero.</p>
                <button type="button" class="btn-knowMore btn btn-primary">Know More</button>
            </div>
            <div class="my-auto text-center col-12 col-sm-12 col-md-6 order-1 order-sm-1 order-md-2">
                <img class="top-svg img-fluid" src="img/header2.svg" alt="Your Favourite Restaurants In One Place" srcset="">
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#5E52AD" fill-opacity="1" d="M0,288L40,277.3C80,267,160,245,240,250.7C320,256,400,288,480,261.3C560,235,640,149,720,144C800,139,880,213,960,240C1040,267,1120,245,1200,213.3C1280,181,1360,139,1400,117.3L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
    </svg>
    {{-- cards container --}}
    <div class="container-fluid px-4 py-5" id="custom-cards">
        <h2 class="h-text-color pb-2 text-center">Custom cards</h2>
    
        <div class="row row-cols-1 row-cols-md-3 align-items-stretch g-4 py-5">
            {{-- Card 1 --}}
            <div class="col">
                <div class="card backgr-card-1 card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                    <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                    </li>
                    <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                        <small>Earth</small>
                    </li>
                    <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                        <small>3d</small>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            {{-- Card 2 --}}
            <div class="col">
                <div class="card backgr-card-2 card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                    <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                    </li>
                    <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                        <small>Pakistan</small>
                    </li>
                    <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                        <small>4d</small>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            {{-- Card 3 --}}
            <div class="col">
                <div class="card backgr-card-3 card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                    <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                        <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                    </li>
                    <li class="d-flex align-items-center me-3">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                        <small>California</small>
                    </li>
                    <li class="d-flex align-items-center">
                        <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                        <small>5d</small>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
      </div>
@endsection