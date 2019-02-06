<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use App\User;

class ClubController extends Controller
{
    public function index() {
        $clubs = Club::with(
            'user',
            'user.club_member',
            'strategy',
            'discussion','discussion.discussion_counts','discussion.discussion_comments','discussion_comment.discussion_comment_counts',
            'menu',
            'calendar',
            'journal'
            )->get();
            
        return $clubs;
    }
    
}
