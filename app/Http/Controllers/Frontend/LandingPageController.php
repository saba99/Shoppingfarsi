<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class LandingPageController extends Controller
{
    public function index(){

        $products=Product::inRandomOrder()->take(8)->get();

        return view('frontend.home.landingpage')->with('products',$products);

    }
}
