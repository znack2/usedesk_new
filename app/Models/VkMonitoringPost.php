<?php

namespace App\Models;

class VkMonitoringPost extends BaseModel
{
    public $timestamps = false;

    protected $table = 'vk_monitoring_posts';
    protected $fillable = [
         'id',
         'user_id',
         'owner_id',
         'from_id',
         'post_id',
         'post_type',
         'text',
         'obj_id',
         'can_post',
         'attachments_count',
         'repost',
         'created_at',
         'created_at_vk',
         'status'
    ];
}




