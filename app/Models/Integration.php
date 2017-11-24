<?php

namespace App\Models;

class Integration extends BaseModel
{
    public $timestamps = false;

    protected $table = 'integration';

    const TYPE_PAID = 'paid';
    const TYPE_FREE = 'free';

    const TYPE_VK = 'vk';
    const TYPE_TWITTER = 'twitter';
    const TYPE_FACEBOOK = 'fb';
    const TYPE_JIVO = 'jivo';
    const TYPE_MONITOR = 'monitor';
    const TYPE_FULLCONTACT = 'fullcontact';
    const TYPE_API = 'api';
    const TYPE_SUPPORT = 'support';
    const TYPE_WORK_TIME = 'work_time';
    const TYPE_SLA = 'sla';
    const TYPE_AI = 'ai';
    const TYPE_TELEPHONY = 'telephony';
    const TYPE_GRAVITEL = 'gravitel';
    const TYPE_ZAPIER = 'zapier';
    const TYPE_CHAT = 'chat';
    const TYPE_ADDITIONAL_FIELDS = 'additional_fields';
    const TYPE_WHATSHELP = 'whatshelp';
    const TYPE_MESSENGER = 'messenger';
    const TYPE_GLAVRED = 'glavred';
    const TYPE_SPELLER = 'speller';
    const TYPE_COBROWSING = 'cobrowsing';
    const TYPE_RETAIL_CRM = 'retail_crm';
    const TYPE_SYNC_ENGINE = 'sync_engine';
    
    protected $fillable = [
        'name',
        'keyword',
        'short_description',
        'type',
        'month_price',
        'year_price',
        'long_description',
        'icon',
        'default_status',
        'status',
    ];
}