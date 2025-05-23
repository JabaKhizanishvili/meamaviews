<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [
        'user_id',
        'theme_id',
        'title',
        'description',
        'video_url',
        'status',
        'views',
        'earned_amount',
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function theme() {
        return $this->belongsTo(Theme::class);
    }
}
