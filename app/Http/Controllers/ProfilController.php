<?php

namespace App\Http\Controllers;

use App\Models\Profile;
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
        $imageProfil = Profile::all()->where('user_id', $ID);
        if ($count < 0) {
                // return "you don't have";
                return view("profil", compact('userInfo', 'imageProfil'))->with("message", "don't have");
        }
        return view("profil", compact('data','imageProfil'), compact('userInfo'), ["userInfo" => $userInfo]);
    }


    // public function getImage(){
    //     $id = Auth::user()->id;

    //         return view("profil", compact("imageProfil"));
    //     }

    public function addImage(Request $request){

    // save pics in folder of profil that inlcude in image
    $fil_extention = $request->image-> getClientOriginalExtension();
    $file_name = time().'.'.$fil_extention;
    $path = 'assets/images/profils';
    $request->image->move($path, $file_name);

    $id = Auth::user()->id;

    $data = [
        'image' => $file_name,
        'user_id' => $id,
    ];
        try {
            Profile::create($data);
            return redirect()->route("profil")->with("added", 'story added succesfully');
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }



    }



}
