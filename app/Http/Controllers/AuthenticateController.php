<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function register(Request $request){
        User::create($request->all());
        return redirect()->route("all");
    }

    public function registerPage(Request $request){
        return view("register");
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route("all");

        }else{
            return redirect()->route("login");

        }
    }

    public function loginPage(){
        return view("login");
    }
}
