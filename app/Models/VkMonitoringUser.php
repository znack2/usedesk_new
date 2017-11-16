<?php

namespace App\Models;

class VkMonitoringUser extends BaseModel
{
    public $timestamps = false;

    protected $table = 'vk_monitoring_users';
    protected $fillable = [
    	 'id',
	     'active',
	     'uid',
	     'access_token',
	     'company_id',
	     'last_check',
	     'search_worlds'
 	];
}
