<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Calendar extends Resource
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
            "day_start"   => $this->day_start,
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
