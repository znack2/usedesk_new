<?php

namespace App\Models;

class ClientPhone extends BaseModel {


    public $timestamps = false;

    protected $table = 'client_phones';
    protected $fillable = ['phone', 'type', 'client_id'];

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }
}
