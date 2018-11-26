<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Moloquent;

class Assignment extends Moloquent
{

  public function ClassRoom(){
    return $this->belongsTo('App\ClassRoom');
  }

  public function Attachment(){
    return $this->embedsMany('App\Attachment');
  }

}
