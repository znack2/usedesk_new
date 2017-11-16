<?php

namespace App\Models;

class VkMessage extends BaseModel
{
    public $timestamps = false;

    protected $table = 'vk_messages';
    protected $fillable = [
		'id',
		'message',
		'company_id',
		'company_email_channel_id',
		'read'
 	];

}
