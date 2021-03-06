<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password', 'confirmed' ,'confirmation'   , 'profile_pic' , 'role' , 'exp' ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'confirmed' ,'confirmation'
    ];

    public function question()
    {
        return $this->hasMany('App\Question');
    }

    public function answer()
    {
        return $this->hasMany('App\Answer');
    }
}
