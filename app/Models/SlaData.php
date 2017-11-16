<?php

namespace App\Models;

class SlaData extends BaseModel
{
    public $timestamps = false;
    protected $dates = [
        'created_at',
        'ended_at',
        'paused_at'
    ];

    protected $table = 'sla_data';
    protected $fillable = [
        'ticket_id',
        'sla_option_id',
        'created_at',
        'ended_at',
        'pause',
        'paused_at'
    ];

    public function ticket()
    {
        return $this->BelongsTo('Ticket');
    }

    public function slaOption()
    {
        return $this->BelongsTo('SlaOption');
    }
}
