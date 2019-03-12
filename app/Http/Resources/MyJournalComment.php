<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\Http\Resources\MyJournalCommentCount as MyJournalCommentCountResource;

class MyJournalComment extends Resource
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
            "my_journal_comment_count" => MyJournalCommentCountResource::collection($this->my_journal_comment_count)
        ];
    }
}
