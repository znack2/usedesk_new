<?php

namespace App\Models;

class TicketStatus extends BaseModel {

    const SYSTEM_NONE = 'none';
    const SYSTEM_NEW = 'new';
    const SYSTEM_OPENED = 'opened';
    const SYSTEM_SOLVED = 'solved';
    const SYSTEM_CLOSED = 'closed';
    const SYSTEM_DELETED = 'deleted';
    const SYSTEM_PENDING = 'pending';
    const SYSTEM_IN_PROGRESS = 'in_progress';
    const SYSTEM_SPAM = 'spam';
    const SYSTEM_DELIVERY = 'delivery';
    const SYSTEM_MERGED = 'merged';

    public $timestamps = false;

    protected $table = 'ticket_statuses';
    protected $fillable = ['name', 'key'];
   
    public function tickets() {
        return $this->hasMany('Ticket');
    }
}
