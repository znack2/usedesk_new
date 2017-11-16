<?php

namespace App\Models;

class ClientPhone extends BaseModel {

    const TYPE_HOME = 'home';
    const TYPE_MOBILE = 'mobile';
    const TYPE_STATIONARY = 'stationary';
    const TYPE_FAX = 'fax';
    const TYPE_OTHER = 'other';

    public $timestamps = false;

    protected $table = 'client_phones';
    protected $fillable = ['phone', 'type', 'client_id'];

    public function client() {
        return $this->belongsTo('Client');
    }
}
