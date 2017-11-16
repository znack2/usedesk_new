<?php

namespace App\Models;

class Chat extends BaseModel
{

    public $timestamps = false;

    protected $table = 'chat';

    protected $fillable = [
    	 'channel_id',
	     'widget_id',
	     'default_status'
	 ];
}
