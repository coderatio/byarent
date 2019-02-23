<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function carts() : HasMany
    {
        return $this->hasMany(Cart::class, 'userID');
    }

    public function getFirstNameAttribute()
    {
        $names = explode(' ', $this->name);
        if (count($names) > 0) {
            return $names[0];
        }

    }

    public function getLastNameAttribute()
    {
        $names = explode(' ', $this->name);
        if (count($names) > 1 && count($names) === 2) {
            return $names[1];
        }

        if (count($names) > 2) {
            return $names[2];
        }

    }
}
