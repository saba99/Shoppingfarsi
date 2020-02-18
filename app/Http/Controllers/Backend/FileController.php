<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\File;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Session;



class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       ($files  =   File::with('products')->get()) ;
        ($products  =   Product::all());
        return view('admin.upload.index', compact('files','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        
       // $products=Product::all();
       //($files=File::all());
     // return $files->filename;

        //($categories = Category::with('childrenRecursive')->where('parent_id', null)->get());
        ($products=Product::with(['files'])->get());
        ($files = File::with(['products'])->get());
        
        return view('admin.upload.upload',compact(['products','files']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    

        $products=new Product;

        
        /*$products->title = $request->input('title');
        $products->sku = $request->input('sku');
        $products->slug = $request->input('slug');*/
        // file validation
        $validator      =   Validator::make(
            $request->all(),
            ['filename'      =>   'required|mimes:jpeg,png,jpg,bmp|max:2048']
        );
        // if validation fails
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        // if validation success
        if ($file   =   $request->file('filename')) {

            $name      =   time() . time() . '.' . $file->getClientOriginalExtension();

            $target_path    =   public_path('/uploads/');

            if ($file->move($target_path, $name)) {

                // save file name in the database
                $file   =   File::create(['filename' => $name]);
                $products  =   Product::create(['title' => $request->input('title'),'sku'=> $request->input('sku'),'slug' => $request->input('slug'),
                    'status' => $request->input('status'), 'price' => $request->input('price'), 'discount' => $request->input('discount_price'),
                    'price' => $request->input('price'), 'short_description' => $request->input('description'),'user_id'=>1,
                    'meta_desc' => $request->input('meta_desc'), 'meta_title' => $request->input('meta_title'),
                    'meta_keywords' => $request->input('meta_keywords')
                
                ]);
               $file->products()->sync($products);
                   
               ($file->products());
               
               //($request->all());
                //return back()->with("success", "محصول با موفقیت ذخیره شد ");

                Session::flash('add_product', 'محصول با موفقیت اضافه شد.');
                return redirect('/file');
            }
        }

        
        

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
       $product = Product::all();
        //$brands = Brand::all();
        $files = File::findOrFail($id);
        
        //photos in with 
        dd($fileproduct = File::with(['products'])->get());
        return view('admin.upload.edit', compact(['files', 'product', 'fileproduct']));
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
