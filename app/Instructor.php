<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;

class Instructor extends Model
{
  public function User(){
    return $this->belongsTo('App\User');
  }
}
