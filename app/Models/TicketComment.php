<?php

namespace App\Models;

use UseDesk\Notifications\SystemNotification;

class TicketComment extends BaseModel
{
    const TYPE_PUBLIC = 'public';
    const TYPE_PRIVATE = 'private';

    const FROM_USER = 'user';
    const FROM_CLIENT = 'client';
    const FROM_TRIGGER = 'trigger';

    const AUTO_PERIOD = 30; //время определения срабатывания автоответчика

    public $timestamps = false;

    protected $table = 'ticket_comments';
    protected $fillable = [
        'type',
        'message',
        'is_html',
        'from',
        'user_id',
        'client_id',
        'ticket_id',
        'trigger_id',
        'group_id',
        'is_first',
        'time',
        'published_at',
        'extra_headers',
        'twitter_id', 
        'vk_id'
     ];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('User');
    }

    /**
     * @return BelongsTo
     */
    public function client()
    {
        return $this->belongsTo('Client');
    }

    /**
     * @return BelongsTo
     */
    public function ticket()
    {
        return $this->belongsTo('Ticket');
    }

    /**
     * @return HasMany
     */
    public function files()
    {
        return $this->hasMany('TicketCommentFile');
    }

    /**
     * @return HasMany
     */
    public function copyEmail()
    {
        return $this->hasMany('TicketCommentCopyEmail');
    }
}
