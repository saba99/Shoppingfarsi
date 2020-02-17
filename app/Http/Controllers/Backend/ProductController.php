<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Contracts\Session\Session;

use App\Models\Brand;
use App\Models\Category;
use App\Models\savephoto;
    use App\Models\Photo;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products=Product::paginate(10);
       return view('admin.products.index',compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    $categories=Category::with('childrenRecursive')->where('parent_id',null)->get();
    
    $brands=Brand::all();

    return view('admin.products.create',compact(['categories','brands']));

    }
    public function generateSKU(){

        $number=mt_rand(1000,99999);
        if($this->checkSKU($number)){

            return $this->generateSKU();
        }
      return (string)$number;
    }

    public function checkSKU($number){

        return Product::where('sku',$number)->exists();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
         $newProduct=new Product();
        $newProduct->title=$request->title;
        $newProduct->sku = $this->generateSKU();
        $newProduct->slug=$request->slug;
        $newProduct->status = $request->status;
        $newProduct->price = $request->price;
        $newProduct->discount= $request->discount_price;
        $newProduct->short_description = $request->meta_desc;
        //$newProduct->brand_id = $request->brand_id;
        $newProduct->user_id = 1;
        
         /*$photo=new photo();
         ($newProduct->img = $photo->id);*/
           
          $newProduct->save();
          
          $newProduct->categories();
         dd($newProduct->categories()->sync($request->categories));
      
      
        
        /*Session::flash('success', 'محصول با موفقیت اضافه شد.');
        return redirect('/administrator/products');*/
}
    

    public function upload()
    {

    

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
