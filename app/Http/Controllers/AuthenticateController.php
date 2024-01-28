<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnValue;

class AuthenticateController extends Controller
{
    public function register(Request $request){
        User::create($request->all());
        return redirect()->route("stories");
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
            return redirect()->route("stories");

        }else{
            return redirect()->route("login")->with('error', "Inforamtion Invalid");

        }
    }

    public function loginPage(){
        return view("login");
    }

    public function logout(){
        Auth::logout();

        return redirect('/');

    }
}