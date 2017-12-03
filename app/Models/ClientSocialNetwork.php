<?php

namespace App\Models;

class ClientSocialNetwork extends BaseModel {



    public $timestamps = false;

    protected $table = 'client_social_networks';
    protected $fillable = [
         'url',
         'type',
         'client_id',
         'uid',
         'fullcontact'
 ];

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }
}
