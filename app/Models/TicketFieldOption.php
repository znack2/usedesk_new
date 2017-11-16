<?php

namespace App\Models;

class TicketFieldOption extends BaseModel
{
    public $timestamps = false;

    protected $table = 'ticket_field_options';
    protected $fillable = [ 'ticket_field_id', 'value'];

    public function ticketField() {
        return $this->BelongsTo('TicketField');
    }

}
