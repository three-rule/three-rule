<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\MyJournalCount as MyJournalCountResource;
use App\Http\Resources\MyJournalComment as MyJournalCommentResource;

class MyJournal extends Resource
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
            // "updated_at"  => $this->updated_at
            
            "my_journal_count"         => MyJournalCountResource::collection($this->my_journal_count),
            "my_journal_comment"       => MyJournalCommentResource::collection($this->my_journal_comment)
        ];
    }
}
