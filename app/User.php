<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'admin',
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
     * isAdmin returns true if this user is an administrator
     */
    public function isAdmin()
    {
        return $this->admin;
    }
/**
    public function client()
    {
        // De User - geen admin - bezit een entry in Client en dus
        // zoeken we de Client die hoort bij deze User
  //      dd( $this->hasOne(Client::class));
        return $this->hasOne(Client::class);
    }
  **/
}
