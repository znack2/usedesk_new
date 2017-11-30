<?php

namespace App\Models;

class TicketTagsChange extends BaseModel {

    public $timestamps = false;

    protected $table = 'ticket_tags_changes';
    protected $fillable = ['ticket_id', 'changed_at'];

    public function ticket() {
        return $this->belongsTo('App\Models\Ticket');
    }

    public function tags() {
        return $this->belongsToMany('TicketTag', 'ticket_tags_2_ticket_tags_changes');
    }
}
