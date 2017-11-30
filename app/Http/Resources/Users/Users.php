<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Users extends Resource
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
            'last_su_viewed' => $this->last_su_viewed,
            'password' => $this->password,
            'remember_token' => $this->remember_token,
            'confirmation_code' => $this->confirmation_code,
            'confirmed' => $this->confirmed,
            'default_group' => $this->default_group,
            'status' => $this->status,
            'deleted' => $this->deleted,
            'deleted_at' => $this->deleted_at,

            'zendesk_id' => $this->zendesk_id
            'user_group_id' => $this->user_group_id,
//            'company_id' => Company::collection($this->posts),
        ];

    }
}
