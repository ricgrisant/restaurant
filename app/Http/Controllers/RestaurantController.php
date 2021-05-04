<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        //Retrieve data using eloquent

        $restaurants = Restaurant::all();

        return view('restaurants.index',[
            'restaurants' => $restaurants
        ]);
    }

    
    public function show($id)
    {
        //Obtain data based on id
        $restaurant = Restaurant::findOrFail($id);
        // Another way 
        // |
        // v
        // $restaurant = Restaurant::where('id',$id)->get();
        return view('restaurants.show',['restaurantInfo' => $restaurant ]);
    }

    public function create()
    {
        return view('restaurants.create');
    }
}
