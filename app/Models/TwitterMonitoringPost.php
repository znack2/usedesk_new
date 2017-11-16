<?php

namespace App\Models;

class TwitterMonitoringPost extends BaseModel
{
    public $timestamps = false;

    protected $table = 'twitter_monitoring_posts';
    protected $fillable = [
         'id',
         'tweet_id',
         'text',
         'in_reply_to_status_id',
         'in_reply_to_user_id',
         'in_reply_to_screen_name',
         'sender_id',
         'sender_name',
         'sender_screen_name',
         'sender_profile_image_url',
         'user_id',
         'created_at',
         'created_at_twitter',
         'status'
    ];
}
