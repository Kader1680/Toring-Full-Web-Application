<?php
namespace App\Http\Controllers;

use App\Models\StoryFavorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function toggleStory(Request $request)
    {
        $userId = auth()->id();
        $storyId = $request->story_id;

        $fav = StoryFavorite::where('user_id', $userId)->where('story_id', $storyId)->first();

        if ($fav) {
            $fav->delete();
            return back()->with('message', 'Story unfavorited');
        }

        StoryFavorite::create([
            'user_id' => $userId,
            'story_id' => $storyId,
        ]);

        return back()->with('message', 'Story favorited');
    }

    
}
