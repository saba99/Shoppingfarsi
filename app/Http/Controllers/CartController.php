<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Support\Facades\Cart;


use DB;



class CartController extends Controller
{
    
    public function index()
    {
        ($mightAlsoLike = Product::MightAlsoLike()->get());
        //groupBy('country')->

        //$country_list=DB::table('country_state_city')->groupBy('country')->get();

            // dd($country_list);
        return view('frontend.cart.view')->with(['mightAlsoLike'=> $mightAlsoLike]);
    }

    function fetch(Request $request){

        
        $select=$request->get('select');

        $value=$request->get('value');

        $dependent=$request->get('dependent');

 
        //$data=DB::table('country_state_city')->where($select,$value)->groupBy($dependent)->get();


        /*$output='<option value="">Select '.ucfirst($dependent).'</option>';

        foreach($data as $row){
            
            $output .='<option value="'.$row->$dependent.'">
            '.$row->dependent.'</option>';

        }
        echo $output;*/



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*dd(Cart::add($request->id,$request->title,1,$request->price,$request->discount)->associate('App\Models\Product'));

        return redirect()->route('cart.index')->with('add_cart','محصول با موفقیت به سبد خرید اضافه شد');*/ 

       


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
