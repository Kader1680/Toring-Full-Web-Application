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
        'id_story',
        'id_category',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comment(){
        return $this->hasMany(Comments::class);
    }
    public function categorie(){
        return $this->belongsTo(Category::class);
    }

    public function likes(){
        return $this->belongsToMany(User::class, 'likes', 'id_post', 'id_user');
    }
}
