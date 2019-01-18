<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function club(){
        return $this->belongsTo('App\Club');
    }
    public function timezone(){
      return $this->belongsTo('App\Timezone');
    }
    public function position(){
      return $this->belongsTo('App\Position');
    }
    
    public function menu_counts(){
      return $this->hasMany('App\MenuCount');
    }
    public function menu_comments(){
      return $this->hasMany('App\MenuComment');
    }
}
