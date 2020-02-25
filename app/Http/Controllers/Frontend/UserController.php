<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Address;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   public function register(Request $request){

      //return $request->all();
        $user = new User();
        $user->name = $request->input('name');
        $user->last_name =  $request->input('last_name');
        $user->national_code =  $request->input('national_code');
        $user->phone =  $request->input('phone');
        $user->email =  $request->input('email');
        $user->password = Hash::make($request->input('password'));

        $user->save();

        $address = new Address();

        $address->address =  $request->input('address');
        $address->company =  $request->input('company');
        $address->province =  $request->input('province');
        $address->city =  $request->input('city');
        $address->post_code =  $request->input('post_code');
        $address->user_id = 1;
        $address->save();

        Session::flash('success', '  ثبت نام شما با موفقیت انجام شد  ');

        return redirect('/login');
   }

   public function profile(){
  
      $user=Auth::user();
     
      return view('frontend.profile.index', compact(['user']));

   }
}
