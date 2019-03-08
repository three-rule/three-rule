<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\ClubMember as ClubmMemberResource;
// use App\Http\Resources\ClubFan as ClubFanResource;

class Club extends Resource
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
            "image"          => $this->image,
            "policy"         => $this->policy,
            "rule_one"       => $this->rule_one,
            "rule_two"       => $this->rule_two,
            "rule_three"     => $this->rule_three,
            "tag_one"        => $this->tag_one,
            "tag_two"        => $this->tag_two,
            "tag_three"      => $this->tag_three,
            "tag_four"       => $this->tag_four,
            "tag_five"       => $this->tag_five,
            
            "club_member" => ClubmMemberResource::collection($this->club_member),
            // "club_fan"    => ClubFanResource::collection($this->club_fan)
        ];
    }
}
