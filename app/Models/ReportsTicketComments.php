<?php

namespace App\Models;

class ReportsTicketComments extends BaseModel
{
    public $timestamps = false;

    protected $table = 'reports_ticket_comments';
    protected $fillable = [ 
        'ticket_id',
        'ticket_comment_id',
        'user_id',
        'group_id',
        'company_id',
        'comment_time',
        'work_time',
        'published_at',
        'is_first'
    ];

    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function ticket()
    {
        return $this->belongsTo('App\Models\Ticket');
    }

    public function comment()
    {
        return $this->belongsTo('App\Models\TicketComment');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

}
