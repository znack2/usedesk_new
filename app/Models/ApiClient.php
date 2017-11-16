<?php

namespace App\Models;

class ApiClient extends BaseModel 
{
    public $timestamps = false;

    protected $table = 'api_clients';
    protected $fillable = [
    	 'redirect_uri',
	     'company_id',
	     'client_id',
	     'client_secret',
	     'client_name'
	 ];
}
