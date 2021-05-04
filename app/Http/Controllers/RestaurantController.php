<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        //Retrieve data using eloquent

        $restaurants = Restaurant::orderBy('name')->get();

        return view('restaurant',[
            'restaurants' => $restaurants
        ]);
    }

    public function show($id)
    {
        return view('details',['menuId' => $id ]);
    }
}
