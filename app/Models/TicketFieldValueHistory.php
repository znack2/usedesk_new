<?php

namespace App\Models;

class TicketFieldValueHistory extends BaseModel
{
    public $timestamps = false;

    protected $table = 'ticket_field_values_history';
    protected $fillable = [ 'ticket_id', 'ticket_field_id', 'value', 'changed_at'];
    protected $dates = [
        'changed_at'
    ];

    public function ticket() {
        return $this->belongsTo('App\Models\Ticket');
    }

    public function ticketField() {
        return $this->belongsTo('App\Models\TicketField');
    }
}
