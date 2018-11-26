<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Model;

class Attachment extends Model
{
    public function Assignment(){
      return $this->belongsTo('App\Assignment');
    }
}
