<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\returnValue;

class AuthenticateController extends Controller
{
    public function register(Request $request){

        $valditor = Validator::make($request->all(), [
            'FirstName' => ['required'],
            'LastName' => ['required'],
            'email' => ['required'],
            'mobile' => ['required'],
            'name' => ['required'],
            'confirm' => ['required'],
            'password' => ['required'],
        ]);
        if ($valditor->fails()) {
            return redirect()->back()->with(['errors' => 'Some Failed Are Empty Please Try To Put All Information']);
        }

        $register = User::create($request->all());
        return redirect()->route("profil");




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
            return redirect()->route("login")->with('errors', 'Username or Password are Invalid');
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
