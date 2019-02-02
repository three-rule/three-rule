<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function user_type() {
      return $this->belongsTo('App\UserType');
    }
    
    
    public function club(){
      return $this->belongsTo('App\Club');
    }
    public function club_member(){
      return $this->hasMany('App\ClubMember');
    }
    public function mypage(){
      return $this->hasMany('App\Mypage');
    }
    public function strategy(){
      return $this->hasMany('App\Strategy');
    }
    
    public function discussion(){
      return $this->hasMany('App\Discussion');
    }
    public function discussion_count(){
      return $this->hasMany('App\DiscussionCount');
    }
    public function discussion_comments(){
      return $this->hasMany('App\DiscussionComment');
    }
    public function discussion_comment_count(){
      return $this->hasMany('App\DiscussionCommentCount');
    }
    
    public function menu(){
      return $this->hasMany('App\Menu');
    }
    public function menu_count(){
      return $this->hasMany('App\MenuCount');
    }
    public function menu_comments(){
      return $this->hasMany('App\MenuComment');
    }
    public function menu_comment_counts(){
      return $this->hasMany('App\MenuCommentCount');
    }
    
    public function calendar(){
      return $this->hasMany('App\Calendar');
    }
    public function calendar_count(){
      return $this->hasMany('App\CalendarCount');
    }
    public function calendar_comments(){
      return $this->hasMany('App\CalendarComment');
    }
    public function calendar_comment_counts(){
      return $this->hasMany('App\CalendarCommentCount');
    }
    
    public function journal(){
      return $this->hasMany('App\Journal');
    }
    public function journal_count(){
      return $this->hasMany('App\JournalCount');
    }
    public function journal_comments(){
      return $this->hasMany('App\JournalComment');
    }
    public function journal_comment_counts(){
      return $this->hasMany('App\JournalCommentCount');
    }
}
