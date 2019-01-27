<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalComment extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function club(){
        return $this->belongsTo('App\Club');
    }
    public function journal(){
      return $this->belongsTo('App\Journal');
    }
    
    
    public function journal_comment_counts()
    {
      return $this->hasMany('App\JournalCommentCount');
    }
}
