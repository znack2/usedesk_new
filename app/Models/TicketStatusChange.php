<?php

namespace App\Models;

class TicketStatusChange extends BaseModel {

    public $timestamps = false;

    protected $table = 'ticket_status_changes';
    protected $fillable = ['ticket_id', 'ticket_status_id', 'changed_at'];

    public function ticket() {
        return $this->belongsTo('App\Models\Ticket');
    }

    public function ticketStatus() {
        return $this->belongsTo('App\Models\TicketStatus');
    }


}
