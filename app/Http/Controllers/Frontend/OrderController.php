<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Payment;

class OrderController extends Controller
{
    public function verify(Request $request){

    //($product = Product::with('files')->whereId($id)->first());
    $product = Product::with('files')->first();
    ($oldCart = Session::has('cart') ? Session::get('cart') : null);

    $cart = new Cart($oldCart);

    ($request->session()->put('cart', $cart));

    $cart->add($product,null);

    
        //dd($cart); 

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
        $order->status=0;
         $order->save();

         $order->products()->attach($productId);

      //dd($cart);

      $payment = new Payment($order->amount,$order->id);

      $result = $payment->doPayment();

      //dd($result); 

      if ($result->Status == 100) {
         //Header('Location: https://sandbox.zarinpal.com/pg/StartPay/'.$result->Authority);

         return redirect()->to('https://sandbox.zarinpal.com/pg/StartPay/' . $result->Authority);
      } else {
         echo 'ERR: ' . $result->Status;
      }    

    }
   public function index()
   {

      $orders = Order::paginate(5);

      return view('frontend.profile.orders', compact(['orders']));
   }

   public function getOrderLists($id)
   {

      ($order = Order::with('user',  'products.files')->whereId($id)->first());
      return view('frontend.profile.lists', compact(['order']));
   }
    
}
