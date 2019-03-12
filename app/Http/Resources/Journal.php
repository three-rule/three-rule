<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\JournalCount as JournalCountResource;
use App\Http\Resources\JournalComment as JournalCommentResource;


class Journal extends Resource
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
            "title"       => $this->title,
            "appeal"      => $this->appeal,
            "activity_at" => $this->activity_at,
            "improvement" => $this->improvement,
            "nextaction"  => $this->nextaction,
            "free"        => $this->free,
            "image"       => $this->image,
            
            "journal_count"   => JournalCountResource::collection($this->journal_count),
            "journal_comment" => JournalCommentResource::collection($this->journal_comment)
        ];
    }
}
