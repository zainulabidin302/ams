<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Model;

class Tag extends Model
{
  public function ClassRoom(){
    return $this->belongsTo('App\ClassRoom');
  }
}
