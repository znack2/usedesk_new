<?php

namespace App\Models;

class VkChannel extends BaseModel
{
    public $timestamps = false;

    protected $table = 'vk_channels';
    protected $fillable = [
    	 'id',
	     'company_email_channel_id',
	     'company_id',
	     'vk_group_id',
	     'secret_key',
	     'vk_submit_string',
	     'group_key'
 	];
}
