<?php

namespace App\Http\Resources\Blocks;

use Illuminate\Http\Resources\Json\Resource;

class BlockResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'title' => $this->title,
            'url' => $this->url,
            'company_id' => $this->company_id,
            'type' => $this->type,
            'active' => $this->active,
//            'posts' => Post::collection($this->posts),
        ];
    }
}
