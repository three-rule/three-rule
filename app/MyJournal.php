<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyJournal extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    
    public function my_journal_count(){
      return $this->hasMany('App\MyJournalCount');
    }
    public function my_journal_comment(){
      return $this->hasMany('App\MyJournalComment');
    }
}
