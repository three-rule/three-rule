<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubCalling extends Model
{
    public function club() {
      return $this->hasMany('App\Club');
    }
}
