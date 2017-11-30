<?php

namespace App\Http\Resources\Wiki;

use Illuminate\Http\Resources\Json\Resource;

class AccountResource extends Resource
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
            'user_id' => $this->user_id,
            'channel_id' => $this->channel_id,
            'is_active' => $this->is_active,
            'company_id' => $this->company_id,
            'oauth_token' => $this->oauth_token,
            'oauth_token_secret' => $this->oauth_token_secret,
            'date_create' => $this->date_create,
            'updated_time' => $this->updated_time,
        ];
    }
}
