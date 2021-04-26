<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = [
            ['name'=>'pizzaHut', 'category'=>'Pizza'],
            ['name'=>'Burger King', 'category'=>'Hamburgers'],
            ['name'=>'Popeyes', 'category'=>'Fried Chicken']
        ];

        return view('restaurant',[
            'restaurants' => $restaurants
        ]);
    }

    public function show($id)
    {
        return view('details',['menuId' => $id ]);
    }
}
