<?php

namespace App\Models;

class VkAccount extends BaseModel
{
    public $timestamps = false;

    protected $table = 'vk_accounts';
    protected $fillable = [
    	 'id',
	     'user_id',
	     'channel_id',
	     'is_active',
	     'date_create',
	     'company_id',
	     'token',
	     'updated_time',
	     'vk_user_id'
	 ];
}
