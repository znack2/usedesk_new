<?php

namespace App\Models;

class TwitterMonitoringUser extends BaseModel
{
    public $timestamps = false;

    protected $table = 'twitter_monitoring_users';
    protected $fillable = [
    	 'id',
	     'active_admin',
	     'active_user',
	     'last_check',
	     'company_id',
	     'limit',
	     'search_worlds'
 	];
}