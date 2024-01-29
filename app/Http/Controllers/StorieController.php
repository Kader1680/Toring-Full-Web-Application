<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StorieController extends Controller
{

    public function allStories(){
        $stories = Story::all();
        return view("allstories", compact('stories'));
    }
}
