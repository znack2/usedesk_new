<?php

namespace App\Http\Resources\Macros;

use Illuminate\Http\Resources\Json\Resource;

class MacroResource extends Resource
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
            'privacy' => $this->privacy,
            'name' => $this->name,
            'message' => $this->message,
            'enabled' => $this->enabled,
            'blocked' => $this->blocked,
            'for_user_id' => $this->for_user_id,
            'sort' => $this->sort,
            'deleted' => $this->deleted,
//            'company_id' => Company::collection($this->posts),
//            'changed_by_user' => User::collection($this->posts),
        ];
    }
}
