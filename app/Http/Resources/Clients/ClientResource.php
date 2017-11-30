<?php

namespace App\Http\Resources\Clients;

use Illuminate\Http\Resources\Json\Resource;

class ClientResource extends Resource
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
            'avatar' => $this->avatar,
            'position' => $this->position,
            'note' => $this->note,
            'zendesk_id' => $this->zendesk_id,
            'spammer' => $this->spammer,
            'vip' => $this->vip,
//            'company_id' => Post::collection($this->posts),
//            'client_company_id' => Post::collection($this->posts),
        ];
    }
}
