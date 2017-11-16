<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class Users extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'email' => $this->email,
            'avatar' => $this->avatar,
            'my_signature' => $this->my_signature,
            'use_signature' => $this->use_signature,
            'name' => $this->name,
            'position' => $this->position,
            'phone' => $this->phone,
            'note' => $this->note,
            'role' => $this->role,
            'lang' => $this->lang,
            'is_first' => $this->is_first,
            'reply_behavior' => $this->reply_behavior,
            'company_id' => $this->company_id,
            'last_su_viewed' => $this->last_su_viewed,
            'zendesk_id' => $this->zendesk_id
        ];

    }
}
