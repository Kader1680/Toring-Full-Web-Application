<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostStorieController extends Controller
{
    public function PostStory(Request $request){

        $id = Auth::user()->id;

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $id,
            'category_id' => $request->input('option'),

        ];
        try {
            Story::create($data);
            return redirect()->route("stories")->with("added", 'story added succesfully');
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function FormStory(){


        return view("post");
    }

}


