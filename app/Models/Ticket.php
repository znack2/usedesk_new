<?php

namespace App\Models;

use Illuminate\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\File;
//use UseDesk\Notifications\SystemNotification;

class Ticket extends BaseModel
{

    const TYPE_QUESTION = 'question';
    const TYPE_TASK = 'task';
    const TYPE_PROBLEM = 'problem';
    const TYPE_INCIDENT = 'incident';

    const PRIORITY_LOW = 'low';
    const PRIORITY_MEDIUM = 'medium';
    const PRIORITY_URGENT = 'urgent';
    const PRIORITY_EXTREME = 'extreme';
    const CHANNEL_VK = 'vk';
    const CHANNEL_FB = 'facebook';
    const CHANNEL_EMAIL = 'email';
    const CHANNEL_API = 'api';
    const CHANNEL_GRAVITEL = 'gravitel';
    const CHANNEL_MANGO = 'mango';
    const CHANNEL_TELEPHONY = 'telephony';
    const CHANNEL_WHATSHELP = 'whatshelp';
    const UPDATE_BY_EMAIL_REGEXP = 'by_email_from_regexp';
    const UPDATE_BY_PHONE_REGEXP = 'by_phone_from_regexp';
    const UPDATE_BY_NAME_REGEXP = 'by_name_from_regexp';
    const USEDESK_CHAT = 'usedesk_chat';
    public $regexp_matches = array();
    public $trigger_values = array();
    public $use_word_forms = false;
    public $timestamps = false;

    protected $table = 'tickets';
    protected $fillable = [
        'subject',
        'type',
        'priority',
        'status_id',
        'client_id',
        'assignee_id',
        'channel',
        'email_channel_id',
        'email_channel_subject',
        'email_channel_email',
        'company_id',
        'status_updated_at',
        'last_updated_at',
        'published_at',
        'last_viewed_at',
        'zendesk_id',
        'social_id',
        'owner_id',
        'spam_score',
        'notification_email',
        'group',
        'contact'
     ];


    /**
     * @return BelongsTo
     */
    public function status()
    {
        return $this->belongsTo('App\Models\TicketStatus');
    }

    /**
     * @return BelongsTo
     */
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    /**
     * @return BelongsTo
     */
    public function assignee()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return BelongsTo
     */
    public function emailChannel()
    {
        return $this->belongsTo('App\Models\CompanyEmailChannel');
    }

    /**
     * @return BelongsTo
     */
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
    public function chats()
    {
        return $this->hasMany('App\Models\UChats');
    }
    /**
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('TicketTag','ticket_tags_2_tickets');
    }

    /**
     * @return HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\TicketComment');
    }

    /**
     * @return HasMany
     */
    public function triggerChanges()
    {
        return $this->hasMany('App\Models\TriggerChange');
    }

    /**
     * @return HasMany
     */
    public function userTicketViews()
    {
        return $this->hasMany('App\Models\UserTicketView');
    }

    /**
     * @return HasMany
     */
    public function slaData()
    {
        return $this->hasMany('App\Models\SlaData');
    }

    /**
     * @return HasMany
     */
    public function slaCloseTimeHistory()
    {
        return $this->hasMany('App\Models\SlaCloseTimeHistory');
    }

    /**
     * @return HasMany
     */
    public function slaReplyHistory()
    {
        return $this->hasMany('App\Models\SlaReplyHistory');
    }

    /**
     * @return HasOne
     */
    public function aiMessage()
    {
        return $this->hasOne('AiMessage');
    }

    /**
     * @return HasMany
     */
    public function ticketFieldValues()
    {
        return $this->hasMany('App\Models\TicketFieldValue');
    }

}
