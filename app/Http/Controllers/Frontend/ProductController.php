<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 

use App\Models\Product;

use App\Models\Category;

class ProductController extends Controller
{
    public function getProduct($slug){

      $product=Product::with(['files','categories','brands','comments','user', 'AttributeValue.AttributeGroup'])->where('slug',$slug)->first();
       
      $relatedProducts = Product::with('categories')->whereHas('categories', function($q) use ($product){
        $q->whereIn('id', $product->categories);
      })->get();
    
         
      return view('frontend.products.index',compact(['product','relatedProducts']));
      
    }

    public function getProductByCategory($id,$page=2){

       //$category=Category::with('products.files')->where('id',$id)->first();
   $category=Category::whereId($id)->first();
    
    //dd($category);
$products=Product::with('files')->whereHas('categories',function($q) use ($category){
$q->where('id',$category->id);

})->paginate($page);
$product=Product::with('categories')->whereHas('categories',function($q) use ($category){
      $q->where('id', $category->id);
})->paginate($page);


//dd($category->name);
 return view('frontend.categories.index',compact(['category','products','categories']));



    }
}
