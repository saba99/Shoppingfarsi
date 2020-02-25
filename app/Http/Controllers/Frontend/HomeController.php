<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\File;
use App\Models\Banner;
use App\Models\Brand;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    

       
        ($latestProduct=Product::with('files')->get());
        /*$modelCategoryProduct=Product::with(['categories'=>function($q){
           
            $q->where('name','پوشاک');
  
        }])->limit(10)->get();*/
        //$brands=Brand::orderBy('created_at','desc')->limit(10)->get();

        $product=Product::orderby('created_at','desc')->limit(10);
        //err dd($product->files()->filename);

        //dd($latestProduct);
        //$file= File::all();
        //yess dd($latestProduct[0]->files[0]->filename);
        //dd($file[2]) ;
        //$product = Product::with('files')->whereId($id)->first());
       //yess $file = File::where('id', 1)->select("id", "filename")->first();
        //  yess dd($file->filename);
        $file  = File::pluck('filename', 'id')->first();

        //dd($file);
        $banners = Banner::where('status', '1')->get();


        return  view('frontend.home.index',compact(['latestProduct','file','banners']));
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
        //
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
