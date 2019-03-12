<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\Mypage as MypageResource;
use App\Http\Resources\Fan as FanResource;
use App\Http\Resources\MyJournal as MyJournalResource;

class User extends Resource
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
            // "id"         => $this->id,
            "name"       => $this->name,
            "user_type"  => $this->user_type,
            "mypage"     => MypageResource::collection($this->mypage),
            "fan"        => FanResource::collection($this->fan),
            "my_journal" => MyJournalResource::collection($this->my_journal)
            
        ];
    }
}
