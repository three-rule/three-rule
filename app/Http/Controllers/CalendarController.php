<?php

namespace App\Http\Controllers;
use App\Http\Resources\CalendarClub as CalendarClubResource;

use Illuminate\Http\Request;
use App\Club;
use App\Calendar;
use App\Menu;

class CalendarController extends Controller
{
    public function index($id)
    {
        $calendars = CalendarClubResource::collection(
                 Calendar::where("club_id",$id)->get()
                );
        return $calendars;
    }
    public function store(Request $request, $id)
    {
        // $uid = auth()->user()->id;
        
        $menu =  new Menu;
        $menu->user_id     = 3;
        $menu->club_id     = $id;
        $menu->tag         = $request->tag;
        $menu->title       = $request->title;
        $menu->url         = $request->url;
        $menu->description = $request->description;
        $menu->save();
        
        $calendar = new Calendar;
        $calendar->user_id     = 3;
        $calendar->club_id     = $id;
        $calendar->start       = $request->start;
        $calendar->end         = "2019-3-9";
        $calendar->title       = $request->title;
        $calendar->tag         = $request->tag;
        $calendar->schedule    = $request->schedule;
        $calendar->start_time  = $request->start_time;
        $calendar->end_time    = $request->end_time;
        $calendar->url         = $request->url;
        $calendar->description = $request->description;
        $calendar->save();
        
        $calendars = CalendarClubResource::collection(
                 Calendar::where("club_id",$id)->get()
                );
        return $calendars;
    }
    public function update(Request $request, $club_id, $calendar_id)
    {
        $uid = auth()->user()->id;
        $calendar = Calendar::find($calendar_id);
        $calendar->user_id     = $uid;
        $calendar->club_id     = $club_id;
        $calendar->start       = $request->start;
        $calendar->title       = $request->title;
        $calendar->tag         = $request->tag;
        $calendar->schedule    = $request->schedule;
        $calendar->start_time  = $request->start_time;
        $calendar->end_time    = $request->end_time;
        $calendar->url         = $request->url;
        $calendar->description = $request->description;
        $calendar->save();
        
        return $calendar;
    }
    public function destroy($club_id, $calendar_id)
    {
        $calendar = Calendar::find($calendar_id);
        if($calendar -> count()) {
            $calendar -> delete();
            return response() -> json('success');
        }else {
            return response() -> json('error');
        }
    }
}
