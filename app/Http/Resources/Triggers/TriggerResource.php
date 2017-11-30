<?php

namespace App\Http\Resources\Trigger;

use Illuminate\Http\Resources\Json\Resource;

class TriggerResource extends Resource
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
            'enabled' => $this->enabled,
            'manual_starting' => $this->manual_starting,
            'position' => $this->position,
            'use_word_forms' => $this->use_word_forms,
            'deleted' => $this->deleted,
//            'company_id' => Company::collection($this->posts),
        ];
    }
}
