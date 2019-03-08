<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuTag extends Model
{
    public function menu(){
      return $this->belongsTo('App\Menu');
    }
    public function club(){
      return $this->belongsTo('App\Club');
    }
}
