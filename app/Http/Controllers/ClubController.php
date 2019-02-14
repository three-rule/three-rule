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
            'discussion','discussion.discussion_counts','discussion.discussion_comments','discussion_comment.discussion_comment_counts',
            'menu','menu.menu_counts','menu_comment','menu_comment.menu_comment_counts',
            'calendar','calendar.calendar_count','calendar_comments','calendar_comments.calendar_comment_count',
            'journal','journal.journal_count','journal_comments','journal_comments.journal_comment_counts'
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
