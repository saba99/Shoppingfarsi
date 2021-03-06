<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Session;

use Validator;
//use Illuminate\Support\Facades\Validator;

use App\Models\Photo;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\File;
use App\User;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $products = Product::with('photos')->get();
        ($files = Photo::with(['products'])->pluck('id', 'filename'));
        // dd($products);
        // dd($products[24]->files()->first());

        return view('admin.upStorg.create', compact('products', 'files'));
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
    public function upload(Request $request)
    {
        
      
         

        }

      public function store(Request $request){
                

        if($file=$request->file('file')){
                
            $name=$file->getClientOriginalName();
            $file->store('public/posts');
        }
      }
    

    public function storage(Request $request,$id){


        request()->validate([
            'filename' => 'required',
            
        ]);
       if($cover = $request->file('filename')){
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover));

        $photo= new Photo();
       
        $photo->user_id = 1;
        $photo->mime = $cover->getClientMimeType();
        $photo->original_name = $cover->getClientOriginalName();
        $photo->filename = $cover->getFilename() . '.' . $extension;
       $photo->save();
       // $product=new Product();
            //$photo->products()->sync();
           
       } 
($products = Product::findOrFail($id));
       ($photo->products())->sync([$products]);

        return view('admin.upStorg.create', compact('products','photo'));
    
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


