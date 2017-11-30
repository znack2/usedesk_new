<?php

namespace App\Models;

//use Jenssegers\Eloquent\Model as Eloquent;

class MonitoringPostMongo extends BaseModel {

    public $collection = 'posts';
    // public $connection = 'mongodb';
    public $timestamps = false;
    //public $dates = ['created'];

    public $fillable = [
        'type', // тип поста: post, comment, video, tweet, reply
        'social_network', //vk, twitter. facebook
        'sender_name',
        'text',
        'created',
        'link',
        'profile_link',
        'soc_id',
        'owner_id',
        'word',
        'post_id',
        'user_photo',
        'properties',
        'channel_id'
    ];

}