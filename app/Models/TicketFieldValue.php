<?php

namespace App\Models;

class TicketFieldValue extends BaseModel
{
    public $timestamps = false;

    protected $table = 'ticket_field_values';
    protected $fillable = [ 'ticket_id', 'ticket_field_id', 'value'];

    public function ticket() {
        return $this->belongsTo('App\Models\Ticket');
    }

    public function ticketField() {
        return $this->belongsTo('App\Models\TicketField');
    }
}
