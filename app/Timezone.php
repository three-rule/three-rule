<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    public function menu(){
      return $this->belongsTo('App\Menu');
    }
}
