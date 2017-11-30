<?php

namespace App\Models;

class TicketField extends BaseModel
{
    public $timestamps = false;

    protected $table = 'ticket_fields';
    protected $fillable = [ 
        'company_id',
        'ticket_field_type_id',
        'name',
        'value',
        'required',
        'add_tag',
        'add_filter',
        'sort',
        'active',
        'api',
        'hidden',
        'deleted'
    ];

    public function company() {
        return $this->belongsTo('App\Models\Company');
    }

    public function ticketFieldType() {
        return $this->belongsTo('App\Models\TicketFieldType');
    }

    public function options() {
        return $this->hasMany('App\Models\TicketFieldOption');
    }

}
