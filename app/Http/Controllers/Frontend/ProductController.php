<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 

use App\Models\Product;

class ProductController extends Controller
{
    public function getProduct($slug){

      $product=Product::with(['files','categories','brands', 'AttributeValue.AttributeGroup'])->where('slug',$slug)->first();
       
      //dd($product->categories);
      $relatedProducts = Product::with('categories')->whereHas('categories', function($q) use ($product){
        $q->whereIn('id', $product->categories);
      })->get();
      //dd($relatedProducts);
      
     // dd($product->files[0]->filename);

      return view('frontend.products.index',compact(['product','relatedProducts']));
      
    }
}
