<?php

namespace App\Http\Controllers;
use App\Http\Resources\JournalClub as JournalClubResource;

use Illuminate\Http\Request;
use Auth;
use App\Club;
use App\Journal;
use App\JournalCount;
use App\JournalComment;
use App\JournalCommentCount;

class JournalController extends Controller
{
    public function index($id)
    {
        $journals = JournalClubResource::collection(
                Club::with(
                    // 'club_member',
                    'journal','journal.journal_count','journal_comment','journal_comment.journal_comment_count'
                    )->where("id",$id)->get()
                );
        return $journals;
    }
    public function store(Request $request, $id) 
    {
        // $journal = new Journal;
        // $journal->user_id     = 1;
        // $journal->club_id     = $request->club_id;
        // $journal->activity_at = $request->activity_date;
        // $journal->title       = $request->title;
        // $journal->appeal      = $request->appeal;
        // $journal->improvement = $request->improvement;
        // $journal->nextaction  = $request->nextaction;
        // $journal->free        = $request->free;
        // $journal->image       = "test";
        // $journal->save();
        // return response()->json($journal);
        
        $uid = auth()->user()->id;
        $journal = new Journal;
        $journal->user_id     = $uid;
        $journal->club_id     = $id;
        $journal->activity_at = $request->activity_at;
        $journal->title       = $request->title;
        $journal->appeal      = $request->appeal;
        $journal->improvement = $request->improvement;
        $journal->nextaction  = $request->nextaction;
        $journal->free        = $request->free;
        $journal->image       = "test";
        $journal->save();
        
        return $journal;
    }
    public function update(Request $request, $club_id, $journal_id) {
        $myjournal = Journal::find($journal_id);
        $myjournal->user_id      = auth()->user()->id;
        $myjournal->activity_at  = $request->activity_at;
        $myjournal->title        = $request->title;
        $myjournal->appeal       = $request->appeal;
        $myjournal->improvement  = $request->improvement;
        $myjournal->nextaction   = $request->nextaction;
        $myjournal->free         = $request->free;
        $myjournal->image        = $request->image;
        $myjournal->save();
        return response()->json($myjournal);
    }
    public function destroy($club_id, $journal_id)
    {
        $journal = Journal::find($journal_id);
        
        if($journal -> count()) {
            $journal -> delete();
            return response() -> json('success');
        }else {
            return response() -> json('error');
        }
    }
    
    
    
    public function like(Request $request, $club_id, $journal_id)
    {
        $uid = auth()->user()->id;
        $journal = JournalCount::where('user_id',$uid)->where('journal_id', $journal_id)->first();
        
        if(!$journal) {
            $like = new JournalCount;
            $like->journal_id = $journal_id;
            $like->user_id    = $uid;
            $like->save();
            
            $journals = JournalClubResource::collection(
                Club::with(
                    'journal','journal.journal_count','journal_comment','journal_comment.journal_comment_count'
                    )->where("id",$club_id)->get()
                );
            return $journals;
        }else {
            $journal->delete();
            $journals = JournalClubResource::collection(
                Club::with(
                        'journal','journal.journal_count','journal_comment','journal_comment.journal_comment_count'
                    )->where("id",$club_id)->get()
                );
            return $journals;
        }
    }
    public function comment(Request $request, $club_id, $journal_id)
    {
        $uid = auth()->user()->id;
        $comment = new JournalComment;
        $comment->club_id        = $club_id ;
        $comment->user_id        = $uid;
        $comment->journal_id     = $journal_id;
        $comment->commentable_id = 1;
        $comment->comment        = $request->comment;
        $comment->image_comment  = 'test';
        $comment->save();
        
        $journals = JournalClubResource::collection(
            Club::with(
                'club_member',
                'journal','journal.journal_count','journal.journal_comment','journal_comment.journal_comment_count'
                )->where("id",$club_id)->get()
            );
        return $journals;
    }
    
    public function commentUpdate(Request $request, $club_id, $journal_comment_id) {
        
        $uid = auth()->user()->id;
        
        $comment = JournalComment::where('id', $journal_comment_id);
        
        if($comment->count()) {
            $comment->update($request->all());
            // $comment = JournalComment::where('user_id',$uid)->where('journal_id', $journal_id)->first();
            // $comment->club_id        = $club_id ;
            // $comment->user_id        = $uid;
            // $comment->journal_id  = $journal_id;
            // $comment->commentable_id = 1;
            // $comment->comment        = $request->comment;
            // $comment->image_comment  = 'test';
            // $comment->save();
            
            $journals = JournalClubResource::collection(
                Club::with(
                    'club_member',
                    'journal','journal.journal_count','journal.journal_comment','journal_comment.journal_comment_count'
                    )->where("id",$club_id)->get()
                );
            return $journals;
        }else {
            return response()->json('error');
        }
    }
    
    public function commentDestroy(Request $request, $club_id, $journal_comment_id) {
        // $uid = auth()->user()->id;
        $comment = JournalComment::where('id', $journal_comment_id);
        
        if($comment->count()) {
            $comment -> delete();
            
            $journals = JournalClubResource::collection(
                Club::with(
                    'club_member',
                    'journal','journal.journal_count','journal.journal_comment','journal_comment.journal_comment_count'
                    )->where("id",$club_id)->get()
                );
            return $journals;
        }else {
            return response() -> json('error');
        }
    }
    
    public function commentlike(Request $request, $club_id, $journal_comment_id)
    {
        $uid = auth()->user()->id;
        $journal = JournalCommentCount::where('user_id',$uid)->where('journal_comment_id', $journal_comment_id)->first();
        
        if(!$journal) {
            $like = new JournalCommentCount;
            $like->journal_comment_id = $journal_comment_id;
            $like->user_id               = $uid;
            $like->save();
            
            $journals = JournalClubResource::collection(
                Club::with(
                    'club_member',
                    'journal','journal.journal_count','journal.journal_comment','journal_comment.journal_comment_count'
                    )->where("id",$club_id)->get()
                );
            return $journals;
        }else {
            $journal->delete();
            
            $journals = JournalClubResource::collection(
                Club::with(
                    'club_member',
                    'journal','journal.journal_count','journal.journal_comment','journal_comment.journal_comment_count'
                    )->where("id",$club_id)->get()
                );
            return $journals;
        }
    }
}
