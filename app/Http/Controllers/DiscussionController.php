<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\DiscussionComment;
use App\DiscussionCount;
use App\Club;
use App\User;


class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $exploded = explode(',', $request -> image);
        $decoded= base64_decode($exploded[1]);
        
        if(str_contains($exploded[0], 'jpeg')) {
            $extension = 'jpg';
        }else {
            $extension = 'png';
        }
        
        $fileName = str_random().'.'.$extension;
        
        $path = public_path().'/images/'.$fileName;
        
        file_put_contents($path, $decoded);
        
        $discussion = new Discussion;
        $discussion -> user_id = $request -> user_id;
        $discussion -> club_id = $request -> club_id;
        $discussion -> body = $request -> body;
        $discussion -> image = $fileName;
        $discussion -> save();
        
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Discussion::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Discussion::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $discussion = Discussion::find($id);
        
        if($discussion -> count()) {
            $discussion -> delete();
            return Discussion::with(['discussion_comments', 'discussion_counts']) -> get();
        }else {
            return response() -> json('error');
        }
    }
    
    public function like(Request $request)
    {
        $discussion = DiscussionCount::where('user_id', $request -> user_id) -> where('discussion_id', $request -> discussion_id) -> first();
        
        if(!$discussion) {
            $like = new DiscussionCount;
            $like -> discussion_id = $request -> discussion_id;
            $like -> user_id = $request -> user_id;
            $like -> save();
            
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
        }else {
            $discussion -> delete();
            
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
    
    public function comment(Request $request)
    {
        $comment = new DiscussionComment;
        $comment -> club_id  = $request -> club_id ;
        $comment -> user_id = $request -> user_id;
        $comment -> discussion_id = $request -> discussion_id;
        $comment -> commentable_id = 1;
        $comment -> comment = $request -> comment;
        $comment -> image_comment = 'hahaha';
        $comment -> save();
        
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
    
    public function commentEdit(Request $request) {
        $comment = DiscussionComment::where('id', $request -> id);
        
        if($comment->count()) {
            $comment -> update($request -> all());
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
        }else {
            return response() -> json('error');
        }
    }
    
    public function commentDelete(Request $request) {
        $comment = DiscussionComment::where('id', $request -> id);
        
        if($comment->count()) {
            $comment -> delete();
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
        }else {
            return response() -> json('error');
        }
    }
    
    
}
