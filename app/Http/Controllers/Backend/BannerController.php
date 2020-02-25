<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Banner;

use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class BannerController extends Controller
{     


    public function index(){
         

        
        return view('admin.banners.create');

    }
    public function viewBanner(){

        $banners = Banner::paginate(3);
        return view('admin.banners.index', compact(['banners']));
    }
    public function addBanner(Request $request){
   
        if($request->isMethod('post')){
               
            $data=$request->all();
            //echo "<pre>";print_r($data);die;
            //dd($data);

            $banner=new Banner;

            /*$banner->title=$data['title'];
            $banner->link = $data['link'];*/

            if(empty($data['status'])){

                $status='0';

            }
            else{
                $status=1;
            }
            /* if($request->hasFile('file')){


            image_tmp=Request::file('image');

            if($image_tmp>isValid()){


                $extension=$image_tmp->getClientOriginalExtension();

                $fileName=rand(111,99999).'.'.$extension;

                $banner_path='images/frontend_images/banners/'.$fileName;
               Image::make($image_tmp)->resize(1140,300)->save($banner_path);
               $banner->image=$fileName;

            }
           }*/

            if($cover = $request->file('file')){
                $extension = $cover->getClientOriginalExtension();
           (Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover)));

           
             $banner->link = $request->input('link');
            $banner->title = $request->input('title');
            $banner->status= $status;
            $banner->mime = $cover->getClientMimeType();
            $banner->original_filename = $cover->getClientOriginalName();
            ($banner->image = $cover->getFilename() . '.' . $extension);
            
       
            }
               if($banner->save()){

                return redirect()->back()->with('add_banner','اسلایدر با موفقیت ذخیره شد');
               }
               else{
                   return "non";
               }
     
    }
       /* $bannerDetails = Banner::where('id', $id)->first();

        return view('admin.banners.edit', compact(['bannerDetails'])); */

}   


public function editBanner(Request $request,$id){

        if ($request->isMethod('patch')) {

           ($data = $request->all());
            

            $banner = new Banner;
     

           // $banner->title = $data['title'];

            if (empty($data['status'])) {

                $status = '0';
            } else {
                $status = '1';
            }

            if ($cover = $request->file('file')) {
                $extension = $cover->getClientOriginalExtension();
                (Storage::disk('public')->put($cover->getFilename() . '.' . $extension,  File::get($cover)));


                $banner->link = $request->input('link');
                $banner->title = $request->input('title');
                $banner->status = $status;
                $banner->mime = $cover->getClientMimeType();
                $banner->original_filename = $cover->getClientOriginalName();
               ( $banner->image = $cover->getFilename() . '.' . $extension);  
            }
               //($banner->save());
              
            ($update = Banner::where('id', $id)->update(['status' => $status, 'title' => $data['title'], 'link' => $data['link'], 'original_filename' =>$request->input('file')]));
               

            if ($update==1) { 

                //echo "hi";die;

                return redirect()->back()->with('update_banner', 'اسلایدر با موفقیت به روز رسانی شد');

            } else {
                return "non";
            }


        }

        $bannerDetails = Banner::where('id', $id)->first();

        return view('admin.banners.edit', compact(['bannerDetails'])); 
}

public function deleteBanner($id){


Banner ::where(['id'=>$id])->delete();

return redirect()->back()->with('delete_banner','اسلایدر با موفقیت حذف شد ');


}
}





   