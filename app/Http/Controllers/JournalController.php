<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Journal;

class JournalController extends Controller
{
    public function create(Request $request) {
        
        $journal = new Journal;
        $journal->user_id       = 1;
        $journal->club_id       = $request->club_id;
        $journal->activity_date = $request->activity_date;
        $journal->title         = $request->title;
        $journal->appeal        = $request->appeal;
        $journal->improvement   = $request->improvement;
        $journal->nextaction    = $request->nextaction;
        $journal->free          = $request->free;
        $journal->image         = "test";
        $journal->save();
        
        return response()->json($journal);
    }
}
