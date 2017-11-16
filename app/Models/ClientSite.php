<?php

namespace App\Models;

class ClientSite extends BaseModel {

    public $timestamps = false;

    protected $table = 'client_sites';
    protected $fillable = ['url', 'client_id'];

    public function client() 
    {
        return $this->belongsTo('Client');
    }

}
