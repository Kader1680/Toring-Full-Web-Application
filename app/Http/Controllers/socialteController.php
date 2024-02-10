<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Auth\Authenticatable;

class socialteController extends Controller
{
    public function redirectToGoogle()
    {
        // $gogle_user = Socialite::driver('google')->user();
        // dd($gogle_user);
        return Socialite::driver('google')->redirect();

    }
    public function handleGoogleCallback()

    {

        $googleUser = Socialite::driver('google')->user();

        $user = User::where('email', $googleUser->email)->first();

        if (!$user) {
            // Create a new user if not exists
            $user = new User();
            $user->name = $googleUser->name;
            $user->email = $googleUser->email;
            $user->google_id = $googleUser->getId();
            $user->FirstName  = "unknow";
            $user->LastName  = "unknow";
            $user->confirm  = "unknow";
            $user->password  = "unknow";
            $user->mobile = 0000000;
            $user->save();
        }

        // Login the user
        Auth::login($user);

        // Redirect to home page or wherever you want
        return redirect('/home');

    }



    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->user();

        $user = User::where('email', $facebookUser->email)->first();

        if (!$user) {
            // Create a new user if not exists
            $user = new User();
            $user->name = $facebookUser->name;
            $user->email = $facebookUser->email;
            $user->google_id = $facebookUser->getId();
            $user->FirstName  = "unknow";
            $user->LastName  = "unknow";
            $user->confirm  = "unknow";
            $user->password  = "unknow";
            $user->mobile = 0000000;
            $user->save();
        }

        // Login the user
        Auth::login($user);

        // Redirect to home page or wherever you want
        return redirect('/home');
    }


}
