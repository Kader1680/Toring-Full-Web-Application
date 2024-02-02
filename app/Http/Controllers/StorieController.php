<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Profile;
use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StorieController extends Controller
{

    public function allStories(){
        // $auth = Auth::user()->id;
        // $authStory = Story::all()->where('id_story', $auth);
        $stories = Story::all();
        $comments = Comments::all();

        return view("allstories", compact('stories', 'comments'));
    }

    // public function edit(){
    //     $stories = Story::
    // }
}
