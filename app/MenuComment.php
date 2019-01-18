<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuComment extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function club(){
        return $this->belongsTo('App\Club');
    }
    public function menu(){
      return $this->belongsTo('App\Menu');
    }
    
    
    public function menu_comment_counts(){
      return $this->hasMany('App\MenuCommentCount');
    }
}
