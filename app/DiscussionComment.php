<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscussionComment extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function club(){
        return $this->belongsTo('App\Club');
    }
    public function discussion(){
      return $this->belongsTo('App\Discussion');
    }
    
    public function discussion_comment_count(){
      return $this->hasMany('App\DiscussionCommentCount');
    }
}
