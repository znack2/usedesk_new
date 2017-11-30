<?php

namespace App\Http\Resources\Trigger;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TriggerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
