<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $stories = Story::all();
        $users = User::all();
        return view("dashboard", compact("stories", "users"));
    }
}
