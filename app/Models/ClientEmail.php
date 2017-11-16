<?php

namespace App\Models;

class ClientEmail extends BaseModel {

    public $timestamps = false;

    protected $table = 'client_emails';
    protected $fillable = ['email', 'client_id', 'fullcontact'];

    public function client() {
        return $this->belongsTo('Client');
    }
}
