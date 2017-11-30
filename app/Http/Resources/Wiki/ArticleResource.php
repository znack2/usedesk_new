<?php

namespace App\Http\Resources\Wiki;

use Illuminate\Http\Resources\Json\Resource;

class ArticleResource extends Resource
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
            'text' => $this->text,
            'public' => $this->public,
            'created_at' => $this->created_at,
            'order' => $this->order,
//            'category_id' => Category::collection($this->posts),
        ];
    }
}
