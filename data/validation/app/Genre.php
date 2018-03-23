<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  public function discs()
   {
       return $this->belongsToMany('App\Disc');
   }
}
