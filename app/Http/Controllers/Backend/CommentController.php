<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comment;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function index(){
        $comments=Comment::with('product')->orderBy('created_at','desc')->paginate(30);
        //dd($comments);

        return view('admin.comments.index',compact(['comments']));


    }
    public function actions(Request $request,$id){
         
        if($request->has('action')){

if($request->input('action')=='approved'){

          $comment=Comment::findOrFail($id);
          $comment->status=1;
            $comment->save();


            Session::flash('approved_comment', 'نظر کاربر تایید شد ');  

        }
        else{

            $comment = Comment::findOrFail($id);
            $comment->status = 0;
            $comment->save();
            Session::flash('rejected_comment', 'نظر کاربر رد شد ');

           

       
        }
        }
         return redirect('/administrator/comments');
       


    }
    public function edit($id){

        $comment = Comment::findOrFail($id);

        return view('admin.comments.edit', compact(['comment']));

    }

    public function update(Request $request, $id)
    {


        $comment = Comment::findOrFail($id);

        $comment->description = $request->input('description');

        $comment->save();

        Session::flash('update_comment', 'نظر با موفقیت به روز رسانی شد ');
        return redirect('/administrator/comments');
    }


    public function destroy($id)
    {

        $comment = Comment::findOrFail($id);

        $comment->delete();

        Session::flash('delete_comment', ' نظر با موفقیت حذف شد');

        return redirect('/administrator/comments');
    }
}
