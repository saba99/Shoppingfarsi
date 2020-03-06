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
}
