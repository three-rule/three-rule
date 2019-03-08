<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyJournalCommentCount extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function my_journal_comment(){
      return $this->belongsTo('App\MyJournalComment');
    }
}
