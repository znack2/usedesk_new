<?php

namespace App\Models;

class TicketTag extends BaseModel {

    public $timestamps = false;

    protected $table = 'ticket_tags';
    protected $fillable = ['name'];

    public function tickets() {
        return $this->belongsToMany('Ticket', 'ticket_tags_2_tickets');
    }

}
