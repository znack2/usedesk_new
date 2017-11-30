<?php

namespace App\Models;

class UserTicketView extends BaseAction {

    public $timestamps = false;

    protected $table = 'user_ticket_views';
    protected $fillable = ['user_id', 'ticket_id', 'last_viewed_at'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function ticket() {
        return $this->belongsTo('App\Models\Ticket');
    }

}

