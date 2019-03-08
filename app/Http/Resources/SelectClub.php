<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\BelongsClub as BelongsClubResource;
use App\Http\Resources\BelongsClubFan as BelongsClubFanResource;

class SelectClub extends Resource
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
            "id"          => $this->id,
            "club_member" => BelongsClubResource::collection($this->club_member),
            "club_fan"    => BelongsClubFanResource::collection($this->club_fan)
        ];
    }
}
