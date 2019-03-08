<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\Discussion as DiscussionResource;
use App\Http\Resources\ClubMember as ClubMemberResource;

class DiscussionClub extends Resource
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
            "school_name"    => $this->school_name,
            "school_calling" => $this->school_calling,
            "club_name"      => $this->club_name,   
            "club_calling"   => $this->club_calling,
            
            "discussion"  => DiscussionResource::collection($this->discussion),
            "club_member" => ClubMemberResource::collection($this->club_member)
        ];
    }
}
