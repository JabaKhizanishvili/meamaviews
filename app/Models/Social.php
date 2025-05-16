<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    //
    protected $fillable = [
        'name',
        'icon',
        'url',
        'icon_text',
        'sort_order',
    ];
}
