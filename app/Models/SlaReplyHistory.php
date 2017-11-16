<?php

namespace App\Models;

class SlaReplyHistory extends BaseModel
{
    public $timestamps = false;
    protected $dates = [
        'published_at'
    ];

    protected $table = 'sla_reply_history';
    protected $fillable = [
        'ticket_id',
        'ticket_comment_id',
        'company_id',
        'user_id',
        'group_id',
        'sla_option_id',
        'comment_time',
        'work_time',
        'success',
        'is_first',
        'published_at'
    ];

    
    public function ticket()
    {
        return $this->belongsTo('Ticket');
    }

    public function company()
    {
        return $this->belongsTo('Ticket');
    }

    
    public function comment()
    {
        return $this->belongsTo('TicketComment');
    }

    public function slaOption()
    {
        return $this->belongsTo('SlaOption');
    }

    public function group()
    {
        return $this->belongsTo('UserGroup');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}
