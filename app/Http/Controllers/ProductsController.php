<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function food_beverage(){
        return view('products.fb');
    }
    public function beauty_health(){
        return view('products.bh');
    }
    public function baby_kid(){
        return view('products.bk');
    }
    public function home_care(){
        return view('products.hc');
    }
}
