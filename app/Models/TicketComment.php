<?php

namespace App\Models;

use UseDesk\Notifications\SystemNotification;

class TicketComment extends BaseModel
{


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
        return $this->belongsTo('App\Models\User');
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
    public function ticket()
    {
        return $this->belongsTo('App\Models\Ticket');
    }

    /**
     * @return HasMany
     */
    public function files()
    {
        return $this->hasMany('App\Models\TicketCommentFile');
    }

    /**
     * @return HasMany
     */
    public function copyEmail()
    {
        return $this->hasMany('App\Models\TicketCommentCopyEmail');
    }
}
