<?php

namespace App\Models;

class GmailAccount extends BaseModel
{
    public $timestamps = false;

    protected $table = 'gmail_accounts';
    protected $fillable = [
		'user_id',
		'channel_id',
		'is_active',
		'date_create',
		'company_id',
		'refresh_token',
		'gmail_user_id',
		'historyId'
 	];
}