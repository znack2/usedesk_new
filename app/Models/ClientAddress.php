<?php

namespace App\Models;

class ClientAddress extends BaseModel {

    const TYPE_HOME = 'home';
    const TYPE_WORK = 'work';
    const TYPE_POSTAL = 'postal';

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
        return $this->belongsTo('Client');
    }
}
