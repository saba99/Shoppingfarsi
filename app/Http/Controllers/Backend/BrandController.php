<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\Brand;
use App\Models\Photo;
//use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Validator;
//use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$brands=Brand::all();
        $brands=Brand::paginate(10);
        //dd($brands);
       return view('admin.brands.index',compact(['brands']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }
     public function store(Request $request){
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $cover = $request->file('filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover));

        $brand = new Brand();
        $brand->title = $request->title;
        $brand->description = $request->description;
        $brand->file_id = $request->file_id;
        $brand->mime = $cover->getClientMimeType();
        $brand->original_filename = $cover->getClientOriginalName();
        $brand->filename = $cover->getFilename() . '.' . $extension;
       if($brand->save()){

         return redirect()->route('brands.index')
            ->with('add_brands', 'برند با موفقیت اضافه شد...');
       }

       
      
     }
    public function save(Request $request,$id)
    {
        $brand = new Brand();

        foreach ($request->file('filename') as $image) {
            $brandImage = new File;
            $file=File::findOrFail($id);
            $name = $image->getClientOriginalName();
            $path = public_path() . 'images/brands/' . $file->id . '/' . $name;
            dd($image->move($path));
            

            $brandImage->save();
            $brandImage->file_id = $file->id;
        }

        $brand->title = $request->title;
        $brand->description = $request->description;
        $brand->save();



        //return redirect()->back();
        //return view('admin.brands.index', compact(['brand','file', 'brandImage']));
       



    } 
    public function storeBrand(Request $request){

            $data=array();
            $data['description']=$request->description;
            $data['title'] = $request->title;
            $image=$request->file('filename');

            if($image){
                

               $ext=strtolower($image->getClientOriginalExtension());
              $img_full_name=$ext;

              $upload_path='public/media/brand';

              $img_url=$upload_path.$img_full_name;

              $success=$image->move($upload_path,$img_full_name);

              $data['file_name']=$img_url;

              $brand=DB::table('brands')->insert($data);

              $notification=array(
                  'message'=>'برند با موفقیت افزوده شد',

              );
              return redirect()->back()->with($notification);

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

        $brand = Brand::findOrFail($id);
        

        return view('admin.brands.edit', compact(['brand']));
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
        $brand = Brand::findOrFail($id);
        $brand->title = $request->input('title');
        $brand->description = $request->input('description');
        $cover = $request->file('filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover));

        $brand->file_id = $request->file_id;
        $brand->mime = $cover->getClientMimeType();
        $brand->original_filename = $cover->getClientOriginalName();
        $brand->filename = $cover->getFilename() . '.' . $extension;
        if ($brand->save()) {

            return redirect()->route('brands.index')
                ->with('update_brands', 'برند با به روز رسانی اضافه شد...');
        }
        $brand->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        // dd($product);
        $brand->delete();

        
        return redirect()->route('brands.index')
            ->with('update_brands', 'برند با موفقیت حذف شد ');
       
    }
}
