<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'category_id',
        'comment_id'
    ];
public function user(){
    return $this->belongsTo(User::class, 'user_id');
}

public function category(){
    return $this->belongsTo(Category::class, 'category_id');
}

public function comments(){
    return $this->hasMany(Comments::class);
}

public function likes(){
    return $this->belongsToMany(User::class, 'likes', 'story_id', 'user_id');
}


public function favorites()
{
    return $this->hasMany(StoryFavorite::class); // for Story
}

public function isFavoritedBy($user)
{
    return $this->favorites()->where('user_id', $user->id)->exists();
}


}
