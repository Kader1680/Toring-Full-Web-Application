<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'story_id',
    ];
    public function story(){
        return $this->belongsTo(Story::class);
    }
}
