<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
  public function index(){

       $orders=Order::paginate(5);

       return view('admin.orders.index',compact(['orders']));
       
  }

  public function getOrderLists($id){

   ($order=Order::with('user.addresses.province','user.addresses.city','products.files')->whereId($id)->first());
    return view('admin.orders.lists', compact(['order']));
  }
}
