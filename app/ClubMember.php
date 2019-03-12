<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubMember extends Model
{
    // protected $fillable = [
    //   'id',
    //   'role'  
    // ];
  
    public function user() {
      return $this->belongsTo('App\User');
    }
    public function club() {
      return $this->belongsTo('App\Club');
    }
}
