<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function profil(){
        $ID = Auth::user()->id;

        $data = Story::all()->where("id_story", $ID);
        return view("profil", compact('data'));
    }
}
