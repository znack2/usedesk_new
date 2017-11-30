<?php

namespace App\Models;

class ClientMessenger extends BaseModel {

    const TYPE_IMESSAGE = 'imessage';
    const TYPE_SKYPE = 'skype';
    const TYPE_WHATSAPP = 'whatsapp';
    const TYPE_GTALK = 'gtalk';
    const TYPE_TELEGRAM = 'telegram';
    const TYPE_OTHER = 'other';

    public $timestamps = false;

    protected $table = 'client_messengers';
    protected $fillable = ['identity', 'type', 'client_id'];

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }

}
