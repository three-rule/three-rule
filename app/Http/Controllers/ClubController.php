<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;

class ClubController extends Controller
{
    public function index() {
        $clubs = Club::with(
            'user',
            'user.club_member',
            'strategy',
            'discussion','discussion.discussion_counts','discussion_comment','discussion_comment.discussion_comment_counts',
            'menu',
            'calendar',
            'journal'
            )->get();
            
        return $clubs;
    }
    public function update(Request $request, $id) {
        
        $club = Club::find($id);
        $club->policy     = $request->policy;
        $club->rule_one   = $request->rule_one;
        $club->rule_two   = $request->rule_two;
        $club->rule_three = $request->rule_three;
        $club->save();
        
        return response()->json($club);
    }
}
