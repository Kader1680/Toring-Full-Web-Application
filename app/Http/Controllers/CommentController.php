<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Story;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function allComment(){
        $comments = Comments::all();
        return view("allComments", ["comments" => $comments]);
    }
    public function getStory($id){
        $stories = Story::find($id);

        return view("comment", ["stories" => $stories]);
    }
    public function addComment(Request $request, $id){
        $storyId = Story::find($id);
        $id = $storyId->id;
        $input = [
            'name' => $request->name,
            'id_comment' => $id,

        ];
        $postComment = Comments::create($input);
        if ($postComment) {
            return redirect()->route("stories");
        }





    }
}
