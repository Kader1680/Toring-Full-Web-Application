<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function profil(){
        $ID = Auth::user()->id;
        $data = Story::all()->where("id_story", $ID);
        $userInfo = User::all()->where("id", $ID);
        $count = $data->count();
        if ($count < 0) {
                // return "you don't have";
                return view("profil", compact('userInfo'))->with("message", "don't have");
        }
        return view("profil", compact('data'), compact('userInfo'));
    }

}
