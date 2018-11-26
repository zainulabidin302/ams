<?php

namespace App;
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;


class ClassRoom extends Moloquent
{
    public function User(){
      return $this->belongsTo('App\User');
    }

    public function Assignment(){
      return $this->embedsMany('App\Assignment');
    }
    public function Tag(){
      return $this->embedsMany('App\Tag');
    }

    public function Instructor(){
      return $this->embedsOne('App\Instructor');
    }
}
