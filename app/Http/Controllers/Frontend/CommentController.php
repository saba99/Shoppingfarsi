<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comment;
use App\Models\Product;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
    public function store(Request $request, $productId)
    {
 
    $product=Product::findOrFail($productId);
   
    if($product){

        $newComment = new Comment;
       
           
        $newComment->description = $request->input('description');
        
            //$newComment->product_id = $request->input('productId');
            //$newComment->product_id = $productId;
         $newComment->product_id = $product->id;
        
            $newComment->user_id = Auth::user()->id;
            
        $newComment->status = 0;
        if($newComment->save()){

             
 Session::flash('add_comment', '   نظر شما با موفقیت درج شد و در انتظار تایید مدیر قرار گرفت ');
        return back();
        }
        else{
            echo "non";
        }

    }
      
        

        
       
        //return back();
    }
}
