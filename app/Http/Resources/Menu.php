<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Menu extends Resource
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
            "tag"         => $this->tag,
            "url"         => $this->url,   
            "description" => $this->description
        ];
    }
}
