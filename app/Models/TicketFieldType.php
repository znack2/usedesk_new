<?php

namespace App\Models;

class TicketFieldType extends BaseModel
{
    const TYPE_LIST = 'list';
    const TYPE_TEXT = 'text';
    const TYPE_CHECKBOX = 'checkbox';

    protected $table = 'ticket_field_types';
    protected $fillable = [ 'key'];
}
