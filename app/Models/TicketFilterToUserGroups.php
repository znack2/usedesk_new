<?php

namespace App\Models;

class TicketFilterToUserGroups extends BaseModel {

    public $timestamps = false;

    protected $table = 'ticket_filters_2_user_groups';
    protected $fillable = ['ticket_filter_id', 'user_group_id'];

    public function ticketFilter() {
        return $this->belongsTo('TicketFilter');
    }
}
