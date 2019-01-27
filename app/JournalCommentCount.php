<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalCommentCount extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function journal_comment(){
      return $this->belongsTo('App\JournalComment');
    }
}
