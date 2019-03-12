<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClubMember;
use App\Club;
use App\Topic;
use App\User;

use App\Http\Resources\SelectClub as SelectClubResource;
use App\Http\Resources\Club as ClubResource;
use DB;

class ClubController extends Controller
{
    public function selectclub() {
        // DB::connection()->enableQueryLog();
        
        // $uid = auth()->user()->id;
        $user = SelectClubResource::collection(
                    User::with(
                    'club_member',
                    'club_fan'
                )->where("id",3)->get()
            );
        
        return $user;
        
        // $topics = Topic::all();  
        // \Log::info($topics);
        // return $topics;
            
        // dd(DB::getQueryLog());
        // $queries = DB::getQueryLog();
        // return $queries;
        
        // return [
        //     $user,$topics
        // ];
    }
    public function store(Request $request) {
        // $uid = auth()->user()->id;
        
        $club = new Club;
        $club->user_id         = 3;
        $club->school_name     = $request->school_name;
        $club->school_calling  = $request->school_calling;
        $club->club_name       = $request->club_name;
        $club->club_calling    = $request->club_calling;
        $club->save();
        
        $club_member = new ClubMember;
        $club_member->user_id  = 3;
        $club_member->club_id  = $club->id;
        $club_member->save();
        
        $user = SelectClubResource::collection(
                User::with(
                'club_member'
            )->where("id",3)->get()
        );
        return $user;
    }
    
    
    public function show($id) {
        $club = ClubResource::collection(
                    Club::with(
                        'club_member'
                    )->where("id",$id)->get()
                );
        return $club;
    }
    public function update(Request $request, $id) {
        $club = Club::find($id);
        $club->policy     = $request->policy;
        $club->rule_one   = $request->rule_one;
        $club->rule_two   = $request->rule_two;
        $club->rule_three = $request->rule_three;
        $club->save();
        return response()->json($club);
        // return new ClubResource($club);
    }
    
    public function updaterole(Request $request, $id) 
    {
        \Log::info($request);
        $uid = auth()->user()->id;
        $role = ClubMember::where("user_id",6)->where("club_id",1)->select("id")->first();
        // $role = ClubMember::where("user_id",$uid)->where("club_id",$id)->select("id")->first();
        $role->role = $request->role;
        $role->save();    
        return response()->json($role);
    }
}
