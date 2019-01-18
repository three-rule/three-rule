<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function club(){
        return $this->belongsTo('App\Club');
    }
    
    
    public function journal_count(){
      return $this->hasMany('App\JournalCount');
    }
    public function journal_comment(){
      return $this->hasMany('App\JournalComment');
    }
}
