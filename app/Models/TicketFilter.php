<?php

namespace App\Models;

class TicketFilter extends BaseModel
{
    public $timestamps = false;

    protected $table = 'ticket_filters';
    protected $fillable = ['name', 'data', 'user_id', 'company_id', 'public'];

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function groups()
    {
        return $this->hasMany('TicketFilterToUserGroups');
    }
}
