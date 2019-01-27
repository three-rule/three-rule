<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarComment extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function club(){
        return $this->belongsTo('App\Club');
    }
    public function discussion(){
      return $this->belongsTo('App\Calendar');
    }
    
    public function calendar_comment_counts(){
      return $this->hasMany('App\CalendarCommentCount');
    }
}
