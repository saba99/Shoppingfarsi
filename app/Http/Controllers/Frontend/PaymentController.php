<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use App\Models\Product;


class PaymentController extends Controller
{
   public function verify(Request $request,$id){

      //dd($request->all());
      $product = Product::with('files')->first();
      ($oldCart = Session::has('cart') ? Session::get('cart') : null);

      $cart = new Cart($oldCart);

      ($request->session()->put('cart', $cart));

      $cart->add($product, null);

    ($payment=new Payment($cart->totalPrice));
    $result=$payment->verifyPayment($request->Authority,$request->Status);

    //dd($result);
    //$result->Status == 100
    if ($result) {

//echo 'Transaction success. RefID:'.$result->RefID;
     $order=Order::findOrFail($id);

     $order->status=1;

     $order->save();
$newPayment=new Payment($cart->totalPrice);
    
       $newPayment->Authority=$request->Authority;


        ($newPayment->status = $request->Status); 
         $newPayment->RefID = $result->RefID;
         $newPayment->order_id= $id;
         ($newPayment->save());

         Session::forget('cart');
         Session::flash('success', '  پرداخت شما با موفقیت انجام شد   ');

         return redirect('/profile');

} else {
//echo 'Transaction failed. Status:'.$result->Status;

Session::flash('warning','  در پرداخت شما خطایی به وجود آمده است لطفا مجددا تلاش کنید  ');

return redirect('/profile');
}

   }
}
