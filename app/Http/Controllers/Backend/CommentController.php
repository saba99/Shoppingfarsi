<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comment;

class CommentController extends Controller
{
    public function index(){
        $comments=Comment::orderBy('created_at','desc')->paginate(30);

        return view('admin.comments.index',compact(['comments']));


    }
}
