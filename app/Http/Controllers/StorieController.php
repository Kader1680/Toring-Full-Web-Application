<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Profile;
use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class StorieController extends Controller
{

    public function allStories(){
        $auth = Auth::user()->id;
        $authStory = Story::all()->where('id_story', $auth);
        $stories = Story::all();
        $comments = Comments::all();
        $idStory = Story::select('id_story')->get();
        // dd(gettype($idStory));
       foreach ($idStory as $id) {
        // dd(gettype($id->id_story));
        $name = User::all()->where('id', $id->id_story);

       }

        return view("allstories" ,compact('stories', 'authStory', 'comments', 'name'));
    }
    public function questionId($id){
        $question = Story::find($id);
        $stories = Story::all();
        $comments = Comments::all();
        $idStory = Story::select('id_story')->get();
        // dd(gettype($idStory));
       foreach ($idStory as $id) {
        // dd(gettype($id->id_story));
        $name = User::all()->where('id', $id->id_story);

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
