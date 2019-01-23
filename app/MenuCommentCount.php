<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCommentCount extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function menu_comments(){
      return $this->belongsTo('App\MenuComment');
    }
}
