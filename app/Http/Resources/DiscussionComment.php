<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\UserName as UserNameResource;
use App\Http\Resources\DiscussionCommentCount as DiscussionCommentCountResource;

class DiscussionComment extends Resource
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
            "id"      => $this->id,
            "comment" => $this->comment,
            "user"    => new UserNameResource($this->user),
            "discussion_comment_count" => DiscussionCommentCountResource::collection($this->discussion_comment_count)
        ];
    }
}
