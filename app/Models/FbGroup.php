<?php

namespace App\Models;

use UseDesk\Email\SmtpConnection;

class FbGroup extends BaseModel
{
    public $timestamps = false;

    protected $table = 'fb_groups';
    protected $fillable = [
    	 'id',
	     'fb_id',
	     'channel_id',
	     'is_active',
	     'date_create',
	     'company_id',
	     'token',
	     'updated_time'
 ];
}
