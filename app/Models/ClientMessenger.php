<?php

namespace App\Models;

class ClientMessenger extends BaseModel {


    public $timestamps = false;

    protected $table = 'client_messengers';
    protected $fillable = ['identity', 'type', 'client_id'];

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }

}
