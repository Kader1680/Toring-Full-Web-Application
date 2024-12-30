<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;

class ReactionsController extends Controller
{
    public function count_likes(){
        $countLikes = Like::all()->count();
        return view("allstories", compact("countLikes"));
    }
}
