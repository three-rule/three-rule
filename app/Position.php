<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function menu(){
      return $this->hasMany('App\Menu');
    }
}
