<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscussionCommentCount extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function discussion_comment(){
      return $this->belongsTo('App\DiscussionComment');
    }
}
