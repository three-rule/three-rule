<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarCommentCount extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function calendar_comment(){
      return $this->belongsTo('App\CalendarComment');
    }
}
