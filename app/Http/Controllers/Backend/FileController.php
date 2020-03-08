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
       // return asset('storage/phpFD8.tmp.png');
           
        $products = Product::with('files')->get();
        ($files = File::with(['products'])->pluck('id', 'filename'));
        // dd($products);
        // dd($products[24]->files()->first());
        
        return view('admin.upload.index', compact('products','files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        
        //($categories = Category::with('childrenRecursive')->where('parent_id', null)->get());
      ( $products=Product::with(['files'])->get());

        //dd($photo=($products[0]['files'][0]['filename']));
        /*$products = Product::with(['files' => function ($q) {
            $q->latest(); // sorting related table, so we can use first on the collection
        }])->take(20)->get();*/

   $files = File::with(['products'])->get();
       // dd($filesphoto=$products->first()->files()->first()->filename) ;
     
        return view('admin.upload.upload',compact(['products','files', 'filesphoto']));
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
        $validator      =   Validator::make(
            $request->all(),
            ['filename'      =>   'required|mimes:jpeg,png,jpg,bmp|max:2048']
        );

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
       
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
      $product = Product::findOrFail($id);
        //$brands = Brand::all();
        ($files = File::findOrFail($id));
        
        //photos in with 
      ($fileproduct = File::with(['products'])->get());
        //$product = Product::with(['files'])->whereId($id)->first();
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
        $Product = Product::findOrFail($id);
        $file=File::findOrFail($id);
        $Product->title = $request->input('title');
        $Product->sku = $request->input('sku');
        $Product->slug = $request->input('slug');
        $Product->status = $request->input('status');
        $Product->price = $request->input('price');
        $Product->discount = $request->input('discount_price');
        $Product->short_description = $request->input('description');
        //$newProduct->brand_id = $request->brand;
        $Product->meta_desc = $request->input('meta_desc');
        $Product->meta_title = $request->input('meta_title');
        $Product->meta_keywords = $request->input('meta_keywords');
        $Product->user_id = 1;

        $Product->save();

        $Product->files();
        $Product->files()->sync($request->files);

        Session::flash('update_product', 'محصول با موفقیت به روز رسانی شد');
        return redirect('/file');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = File::findOrFail($id);
           // dd($product);
        $product->delete();

        Session::flash('delete_product', 'محصول با موفقیت حذف شد');
        return redirect('/file');
    }
}
