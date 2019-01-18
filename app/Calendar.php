<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function club(){
        return $this->belongsTo('App\Club');
    }
    public function activity(){
        return $this->belongsTo('App\Activity');
    }
    
    
    public function calendar_count(){
      return $this->hasMany('App\CalendarCount');
    }
    public function calendar_comments(){
      return $this->hasMany('App\CalendarComment');
    }
}
