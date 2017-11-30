<?php

namespace App\Models;

class GetStarted extends BaseModel {

    const KEY_CHANNELS = 'channels';
    const KEY_TICKETS = 'tickets';
    const KEY_USERS = 'users';
    const KEY_GROUPS = 'groups';
    const KEY_TRIGGERS = 'triggers';
    const KEY_MACROSES = 'macroses';

    public $timestamps = false;

    protected $table = 'get_started';
    protected $fillable = ['key', 'done', 'company_id'];

    public function company() {
        return $this->belongsTo('App\Models\Company');
    }
}
