<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCount extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function menu(){
      return $this->belongsTo('App\Menu');
    }
}
