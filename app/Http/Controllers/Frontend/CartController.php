<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\City;
use App\Models\Country;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
class CartController extends Controller
{
   public function addToCart(Request $request,$id){


     // $product=Product::findOrFail($id);
        ($product = Product::with('files')->whereId($id)->first());
    
     ($oldCart=Session::has('cart') ? Session::get('cart'):null);

      $cart=new Cart($oldCart);

      $cart->add($product,$product->id);

      ($request->session()->put('cart',$cart));
        //dd($request->session()) ;
      
    ($request->session()->get('cart'));

     ($request->session(['cart' => $cart]));

      //yess dd($cart->items[$id]['qty']);

      //return back();
      $cities=City::all();
      $countries = Country::all();
      //dd($countries);
          $categories=Category::all();
          $brands=Brand::all();
      return view('frontend.cart.index', compact(['cart', 'oldCart', 'cities', 'countries','categories','brands']));

   }

   public function  removeItem(Request $request,$id){

    $product=Product::findOrFail($id);

        ($oldCart = Session::has('cart') ? Session::get('cart') : null);

        $cart = new Cart($oldCart);

        $cart->remove($product, $product->id);

        ($request->session()->put('cart', $cart));
      

        return back();

   }  

   public function getCart(){

  

      ($cart = Session::has('cart') ? Session::get('cart') : null);

       //dd($cart);

      return view('frontend.cart.index',compact(['cart']));
   } 

// youtube 


}
