<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\UserName as UserNameResource;
use App\Http\Resources\DiscussionCount as DiscussionCountResource;
use App\Http\Resources\DiscussionComment as DiscussionCommentResource;

class Discussion extends Resource
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
            "id"    => $this->id,
            "body"  => $this->body,
            "image" => $this->image,
            
            "user"               => new UserNameResource($this->user),
            "discussion_count"   => DiscussionCountResource::collection($this->discussion_count),
            "discussion_comment" => DiscussionCommentResource::collection($this->discussion_comment)
        ];
    }
}
