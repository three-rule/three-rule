<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarCount extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function calendar(){
      return $this->belongsTo('App\Calendar');
    }
}
