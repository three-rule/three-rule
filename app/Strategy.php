<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function club(){
        return $this->belongsTo('App\Club');
    }
}
