<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function club(){
        return $this->belongsTo('App\Club');
    }
    
    public function discussion_counts(){
      return $this->hasMany('App\DiscussionCount');
    }
    public function discussion_comments(){
      return $this->hasMany('App\DiscussionComment');
    }
}
