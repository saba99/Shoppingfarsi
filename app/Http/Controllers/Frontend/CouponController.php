<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Cart;
use App\Models\Coupon;

class CouponController extends Controller
{
     public function addCoupon(Request $request){

        if(Auth::check()){

           
              $check=Auth::user()->whereHas('coupons',function($q) use($request){

                     
                $q->where('code',$request->code);

              })->exists();
              if(!$check){
                 

                $coupon=Coupon::where('code',$request->code)->first();
                $cart=Session::has('cart')? Session::get('cart') :null;

                $cart=new Cart($cart);

                $cart->addCoupon($coupon);
               
                 $request->session()->put('cart',$cart);

                 $user=Auth::user();

                 $user->coupons()->attach($coupon->id);

                 $user->save();

                 return back();


              }
              else{
        Session::flash('warning', ' شما قبلا از این کد تخفیف استفاده کرده اید');
              }
        }
        else{

            Session::flash('success',' برای استفاده از کوپن تخفیف ابتدا باید عضو سایت شوید');
            return redirect('/login');
        }
     } 
}
