<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
  public function genres()
   {
       return $this->belongsToMany('App\Genre');
   }
}
