<?php

namespace App\Models;

class TriggerChange extends BaseModel
{


    public $timestamps = false;

    protected $table = 'trigger_changes';
    protected $fillable = [
        'trigger_id',
        'user_id',
        'ticket_id',
        'data',
        'changed_at',
        'company_id'
    ];

    public function trigger()
    {
        return $this->belongsTo('App\Models\Trigger');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function ticket()
    {
        return $this->belongsTo('App\Models\Ticket');
    }
}
