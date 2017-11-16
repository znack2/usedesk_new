<?php

namespace App\Models;

class MonitoringPost extends BaseModel
{
    public $timestamps = false;

    protected $table = 'monitoring_posts';
    protected $fillable = [
		'id',
		'type',
		'social_network',
		'sender_name',
		'text',
		'created_at',
		'link',
		'profile_link',
		'soc_id',
		'owner_id',
		'attach',
		'word',
		'user_photo',
		'post_id'
    ];

}