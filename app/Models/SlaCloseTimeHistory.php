<?php

namespace App\Models;

class SlaCloseTimeHistory extends BaseModel
{
    public $timestamps = false;
    protected $dates = [
        'updated_at'
    ];

    protected $table = 'sla_close_time_history';
    protected $fillable = [ 
        'ticket_id',
        'company_id',
        'user_id',
        'group_id',
        'sla_option_id',
        'close_time',
        'work_time',
        'success',
        'by_first',
        'updated_at'
    ];

    public function ticket()
    {
        return $this->belongsTo('App\Models\Ticket');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Ticket');
    }

    public function group()
    {
        return $this->belongsTo('App\Models\UserGroup');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
