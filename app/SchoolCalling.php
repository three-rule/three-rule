<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolCalling extends Model
{
    public function club() {
      return $this->hasMany('App\Club');
    }
}
