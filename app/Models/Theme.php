<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    //
    protected $fillable = [
        'slug',
        'title',
        'image',
        'text',
        'active',
        'hashtag',
    ];
}
