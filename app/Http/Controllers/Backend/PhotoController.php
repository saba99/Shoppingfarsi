<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\UploadedFile;
use Validator;
//use Illuminate\Support\Facades\Validator;

use App\Models\Photo;
use Illuminate\Support\Facades\Auth;

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
         $photo = new Photo();
        $image = $request->file('file');

        $imageName = time() . '.' . $image->extension();

        ($original_name = $image->extension());

        $image->move(public_path('images'), $imageName);

        $photo->path = $imageName;
        $photo->original_name = $image->getClientOriginalName();

      //$user = User::findOrFail($userid);
        /*if($userid = $request->user()->id){
            
      $photo->user_id=$userid;
      
        }*/
        
       //$photo->save();
         
       //Auth::user()->id;
        
     return response()->json(['success' => $imageName]);
               
        return response()->json([
            'photo_id' => $photo->id
        ]);


         /* $uploadedFile = $request->file('file');
        $filename = time() .'.' .$uploadedFile->getClientOriginalName();
        $original_name = $uploadedFile->getClientOriginalName();

       Storage::disk('local')->putFileAs(
            'public/photos',
            $uploadedFile,
            $filename
        );
    
        $photo = new Photo();
        $photo->original_name = $original_name;
        $photo->path = $filename;
        $photo->user_id = 1;
        $photo->save();

        return response()->json([
            'photo_id' => $photo->id
        ]);*/
   
      
         

        }

      
    

    public function store(Request $request){


     

        

    
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


