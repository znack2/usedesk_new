<?php

namespace App\Models;

class TwitterAccount extends BaseModel
{
    public $timestamps = false;

    protected $table = 'twitter_accounts';
    protected $fillable = [
		'id',
		'user_id',
		'channel_id',
		'is_active',
		'date_create',
		'company_id',
		'oauth_token',
		'oauth_token_secret',
		'updated_time'
 	];

}
