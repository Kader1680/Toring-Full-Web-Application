<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StorieController extends Controller
{
    // public function show($id){
    //     $user = Story::all()->where('id_story', $id);
    //     $profil = User::all()->where('id', $id);
    //     return view("stories", compact('user', 'profil'));
    // }
    public function allStories(){
        $stories = Story::all();
        $ID = Auth::user()->id;
        return view("allstories", compact('stories', 'ID'));
    }
}
