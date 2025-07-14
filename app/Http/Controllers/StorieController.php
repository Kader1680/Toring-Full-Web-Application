<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Like;
use App\Models\Profile;
use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

use function PHPSTORM_META\type;

class StorieController extends Controller
{

   

    public function allStories(){

         
        $auth = Auth::user()?->id;
        $authStory = Story::all()->where('user_id', $auth);
        
        $stories = Story::all();
        $comments = Comments::all();
        $idStory = Story::select('user_id')->get();
       
        foreach ($idStory as $id) {
            $name = User::all()->where('id', $id->id);

        }
        
        

        return view("allstories" ,compact('stories',   'comments'));
        
    }


    public function getPostById($id){

        $postId = Story::find($id);
        $likeCounts = Like::where('story_id', $postId->id)->Count();
        
        return view('show', compact("postId", 'likeCounts'));
    }




    public function addLike($id_post){
        $id_user = Auth::user()->id;
        $id_post = Story::find($id_post);
        $addLike = Like::create([
            'id_user' => $id_user,
            'story_id' => $id_post->id,
        ]);
        return redirect('stories');
    }





    public function questionId($id){
        $question = Story::find($id);
        $stories = Story::all();
        $comments = Comments::all();
        $idStory = Story::select('id_user')->get();
        // dd(gettype($idStory));
       foreach ($idStory as $id) {
        // dd(gettype($id->id_user));
        $name = User::all()->where('id', $id->id_user);

       }
        return view('question' ,compact('question', 'comments'));
    }


    public function editView($id){
        $storiesById = Story::find($id);


        return view('edit', ["stories" => $storiesById]);
    }



    
    public function edit(Request $request, $id){
        $edit = Story::find($id);
        $edit->update($request->all());
        if ($edit) {
            return redirect()->route("stories");
        }
    }



    public function destroy($id){
        $delete = Story::find($id);
        $delete->delete();

        if ($delete) {
            return redirect()->route("stories");
        }

    }


}
