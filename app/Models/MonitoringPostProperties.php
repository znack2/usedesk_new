<?php

namespace App\Models;

class MonitoringPostProperties extends BaseModel
{
    public $timestamps = false;

    protected $table = 'monitoring_posts_properties';
    protected $fillable = [
		'id',
		'status',
		'is_ticket',
		'class_id',
		'monitoring_post_id',
		'company_id'
    ];

}