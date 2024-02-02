<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function allComments(){
        $comments = Comments::all();
        return view("allstories", compact('comments'));
    }
}
