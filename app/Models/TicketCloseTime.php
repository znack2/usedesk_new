<?php

namespace App\Models;

class TicketCloseTime extends BaseModel
{
    public $timestamps = false;

    protected $table = 'ticket_close_time';
    protected $fillable = [ 
        'ticket_id',
        'company_id',
        'user_id',
        'group_id',
        'close_time',
        'work_time',
        'by_first',
        'updated_at'
    ];

    public function ticket()
    {
        return $this->belongsTo('Ticket');
    }

    public function company()
    {
        return $this->belongsTo('Ticket');
    }
}
