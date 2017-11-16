<?php

namespace App\Models;

/**
 * @property int $id
 * @property int $user_id
 * @property int $owner_id
 * @property int $from_id
 * @property int $post_id
 * @property string $post_type
 * @property string $text
 * @property int $obj_id
 * @property bool $can_post
 * @property int $attachments_count
 * @property bool $repost
 * @property datetime $created_at
 * @property datetime $created_at_vk
 * @property string $status
 */
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




