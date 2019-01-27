<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalCount extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function journal(){
      return $this->belongsTo('App\Journal');
    }
}
