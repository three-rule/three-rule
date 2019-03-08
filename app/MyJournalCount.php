<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyJournalCount extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function my_journal(){
      return $this->belongsTo('App\MyJournal');
    }
}
