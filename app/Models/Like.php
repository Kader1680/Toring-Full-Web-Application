<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    
    protected $fillable = ['id_user','id_post'];

    const UPDATED_AT = null;
    const CREATED_AT = null;

}
