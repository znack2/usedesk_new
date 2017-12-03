<?php

namespace App\Models;

class TicketVariable extends BaseModel {

    public $timestamps = false;

    protected $table = 'ticket_variables';
    protected $fillable = ['name', 'key', 'description', 'enabled'];
}
