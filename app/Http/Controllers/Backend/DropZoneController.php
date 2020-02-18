<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\savephoto;
use App\Models\Product;
use  App\Models\Category;
use  App\Models\Brand;
use Illuminate\Support\Facades\DB;


class DropZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact(['products']));
        
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('childrenRecursive')->where('parent_id', null)->get();

        $brands = Brand::all();

        return view('admin.products.createup', compact(['categories', 'brands']));
        
    }
   
    

    public function store(Request $request)
    {
        $imagemodel = new savephoto();

       
        if ($files = $request->file('file')) {
            $name = $files->getClientOriginalName();
            $files->move('images', $name);
            DB::table('savephotos')->insert([
                'file' => $name
                
            ]);
        }
        return redirect()->back()->with('message', 'Successfully Save Your Image file.');


            
          
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
