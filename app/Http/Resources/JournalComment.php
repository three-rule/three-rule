<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\JournalCommentCount as JournalCommentCountResource;

class JournalComment extends Resource
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
            "comment" => $this->comment,
            "journal_comment_count" => JournalCommentCountResource::collection($this->journal_comment_count)
        ];
    }
}
