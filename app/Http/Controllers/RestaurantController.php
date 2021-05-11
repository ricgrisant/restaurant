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
        // Another way:
        // $restaurant = Restaurant::where('id',$id)->get();
        return view('restaurants.show',['restaurantInfo' => $restaurant ]);
    }

    public function create()
    {
        return view('restaurants.create');
    }

    public function store()
    {
        // Instanciation of the object Model Restaurant
        $restaurant = new Restaurant();
        // Creation of the values that we will save
        $restaurant->name = request('name');
        $restaurant->email = request('email');
        $restaurant->phone = request('phone');
        $restaurant->category = request('category');

        //Save the values in DB
        $restaurant->save();

        //To send a message when we save data successfully use with parameter
        return redirect('/')->with('message','Restaurant Added to Trinche Successfully!');
    }
}
