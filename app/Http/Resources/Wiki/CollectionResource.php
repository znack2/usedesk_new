<?php

namespace App\Http\Resources\Wiki;

use Illuminate\Http\Resources\Json\Resource;

class CollectionResource extends Resource
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
            'title' => $this->title,
            'description' => $this->description,
            'public' => $this->public,
            'order' => $this->order,
            'account_id' => $this->account_id,
        ];
    }
}
