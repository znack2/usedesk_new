<?php

namespace App\Models;

class ClientAddress extends BaseModel {


    public $timestamps = false;

    protected $table = 'client_addresses';
    protected $fillable = [
    	'country',
	     'city',
	     'address',
	     'type',
	     'client_id'
	 ];

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }
}
