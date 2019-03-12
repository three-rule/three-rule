<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\Menu as MenuResource;

class MenuClub extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return [
        //     "school_name"    => $this->school_name,
        //     "school_calling" => $this->school_calling,
        //     "club_name"      => $this->club_name,   
        //     "club_calling"   => $this->club_calling,
            
        //     "menu" => MenuResource::collection($this->menu)
        // ];
        return [
            "title"       => $this->title,
            "tag"         => $this->tag,
            "url"         => $this->url,   
            "description" => $this->description
        ];
    }
}
