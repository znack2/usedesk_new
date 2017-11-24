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
        return parent::toArray($request);
    }
}
