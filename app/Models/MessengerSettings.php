<?php

namespace App\Models;

class MessengerSettings extends BaseModel
{

    public $timestamps = false;

    protected $table = 'messenger_settings';
    protected $fillable = ['company_id', 'vk_url', 'facebook_url','viber_url','tg_url'];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
