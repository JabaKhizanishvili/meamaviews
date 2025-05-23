<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'verified',
        'active',
        'balance',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function socialAccounts(): HasMany
    {
        return $this->hasMany(SocialAccount::class);
    }

    public function socialAccount(): HasOne
    {
        return $this->hasOne(SocialAccount::class);
    }

//    public function videos(){
//        return $this->hasMany(UserVideo::class);
//    }


    public function iban(){
        return $this->hasOne(Iban::class);
    }
    public function video(){
        return $this->hasMany(Video::class,'user_id');
    }

    public function videos(){
        return $this->hasMany(Video::class,'user_id');
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class);
    }


    public function getTotalViewsAttribute()
    {
        return $this->videos()->sum('views');
    }

    public function getAvailableBalanceAttribute()
    {
        $earned = $this->videos()->sum('earned_amount');
        $withdrawn = $this->withdrawals()->where('status', 'approved')->sum('amount');

        return $earned - $withdrawn;
    }

}
