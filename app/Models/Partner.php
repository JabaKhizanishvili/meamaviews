<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    //
protected $table = 'partners';
protected $fillable = [
    'name',
    'image',
    'is_active',
];
}
