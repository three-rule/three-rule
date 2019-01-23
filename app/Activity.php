<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function calendar(){
      return $this->hasMany('App\Calendar');
    }
}
