<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\FollowUser as FollowUserResource;

class Fan extends Resource
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
            // "user_id" => $this->user_id,
            "status" => $this->status,
            "follow_user_id" => $this->follow_user_id,
            // "follow_user_id" => [
            //     "name" => $this->follow_user_id->name,
            // ],
            
            
            
            // FollowUserテーブルを新たに作る必要があるか？
            // "user" => new UserNameResource($this->user)
        ];
    }
}
