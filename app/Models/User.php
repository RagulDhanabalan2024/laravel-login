<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        // Automatically generate a unique alphanumeric user ID
        static::creating(function ($user) {
            $user->user_id = self::generateUniqueUserId();
        });
    }

    /**
     * Generate a unique alphanumeric user ID.
     *
     * @return string
     */
    private static function generateUniqueUserId()
    {
        $user_id = Str::random(6);
        while (self::where('user_id', $user_id)->exists()) {
            $user_id = Str::random(6);
        }

        return $user_id;
    }
}
