<?php

namespace App\Models;

class TicketStatus extends BaseModel {


    public $timestamps = false;

    protected $table = 'ticket_statuses';
    protected $fillable = ['name', 'key'];
   
    public function tickets() {
        return $this->hasMany('App\Models\Ticket');
    }
}
