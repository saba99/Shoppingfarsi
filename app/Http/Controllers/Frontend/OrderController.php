<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;



class OrderController extends Controller
{
    public function verify(){

        $cart=Session::has('cart') ?Session::get('cart'):null;

        if(!$cart){
        
          Session::flash('warning','سبد خرید شما خالی است');  
        return redirect('/');
        }
              
        $productId=[];
        foreach($cart->items as $product){
          
           // array_push($productId,$product['item']->id);
           $productId[$product['item']->id]=['qty'=>$product['qty']];

        }
        $order=new Order;
        $order->amount=$cart->totalPrice;
        $order->user_id=Auth::user()->id;
        $order->status=1;
         $order->save();

         $order->products()->attach($productId);
    }
}
