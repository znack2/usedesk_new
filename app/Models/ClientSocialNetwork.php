<?php

namespace App\Models;

class ClientSocialNetwork extends BaseModel {

    const TYPE_TWITTER = 'twitter';
    const TYPE_FACEBOOK = 'facebook';
    const TYPE_VK = 'vk';
    const TYPE_OK = 'ok';
    const TYPE_INSTAGRAM = 'instagram';
    const TYPE_YOUTUBE = 'youtube';
    const TYPE_GPLUS = 'gplus';
    const TYPE_OTHER = 'other';

    public $timestamps = false;

    protected $table = 'client_social_networks';
    protected $fillable = [
         'url',
         'type',
         'client_id',
         'uid',
         'fullcontact'
 ];

    public function client() {
        return $this->belongsTo('App\Models\Client');
    }
}
