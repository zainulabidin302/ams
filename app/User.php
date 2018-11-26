<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
<<<<<<< HEAD
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
=======
use Illuminate\Foundation\Auth\User as Authenticatable;
>>>>>>> 6320fa133e4d7a17e9e39145663d6b55f2083a46

class User extends Authenticatable
{
    use Notifiable;
<<<<<<< HEAD
    use HasApiTokens;
=======
>>>>>>> 6320fa133e4d7a17e9e39145663d6b55f2083a46

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
<<<<<<< HEAD

    public function ClassRoom(){
      return $this->hasMany('App\ClassRoom');
    }


=======
>>>>>>> 6320fa133e4d7a17e9e39145663d6b55f2083a46
}
