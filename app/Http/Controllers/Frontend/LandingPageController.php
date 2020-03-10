<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class LandingPageController extends Controller
{
    public function index(){

       $products=Product::inRandomOrder()->take(8)->get();
        ($categories=Category::all()->groupBy('parent_id'));
       

 ($categories['root']=$categories[1]);
        
         //dd($categories);
         //dd(['collection'=>$categories]);
              /*foreach($categories['root'] as $category){

       
                //dd($category->id);
                //dd($categories[$category->id]);
                foreach($categories[$category->id] as $category){
                       
                         dd($category->name);
                  //dd (["items"=>$categories[$category->id]]);

                    
                }
              }*/
         

        return view('frontend.home.landingpage')->with(['products'=>$products,'categories'=>$categories]);

    }

    public function categories(){

       


    }
}
