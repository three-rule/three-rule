<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscussionCount extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function discussion(){
      return $this->belongsTo('App\Discussion');
    }
}
