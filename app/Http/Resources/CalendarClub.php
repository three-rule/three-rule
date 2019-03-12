<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\Calendar as CalendarResource;

class CalendarClub extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            // "school_name"    => $this->school_name,
            // "school_calling" => $this->school_calling,
            // "club_name"      => $this->club_name,   
            // "club_calling"   => $this->club_calling,
            // "calendar" => CalendarResource::collection($this->calendar)
            "start"       => $this->start,
            "end"         => $this->end,
            "title"       => $this->title,
            "tag"         => $this->tag,
            "schedule"    => $this->schedule,
            "start_time"  => $this->start_time,
            "end_time"    => $this->end_time,
            "url"         => $this->url,   
            "description" => $this->description
        ];
    }
}
