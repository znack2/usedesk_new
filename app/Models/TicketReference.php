<?php

namespace App\Models;

use UseDesk\Notifications\SystemNotification;

class TicketReference extends BaseModel {



    public $timestamps = false;

    protected $table = 'ticket_references';

    protected $fillable = ['ticket_comment_id', 'user_id', 'status', 'email'];

}
