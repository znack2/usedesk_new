<?php

namespace App\Http\Resources\Company;

use Illuminate\Http\Resources\Json\Resource;

class CompanyResource extends Resource
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
            'logotype' => $this->logotype,
            'timezone' => $this->timezone,
            'signature_enabled' => $this->signature_enabled,
            'blocked' => $this->blocked,
            'last_login_at' => $this->last_login_at,
            'registered_at' => $this->registered_at,
            'import_enabled' => $this->import_enabled,
            'get_started' => $this->get_started,
            'lang' => $this->lang,
        ];
    }
}
