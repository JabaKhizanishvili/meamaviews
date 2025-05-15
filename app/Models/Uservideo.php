<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uservideo extends Model
{
    //
    protected $fillable = [
        'user_id', 'social_id', 'url', 'title',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function socialAccounts()
    {
        return $this->belongsTo(SocialAccount::class);
    }
}
