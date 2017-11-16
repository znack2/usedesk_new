<?php

namespace App\Models;

class QuickMacros extends BaseAction {

    public $timestamps = false;

    protected $table = 'quick_macroses';
    protected $fillable = ['value', 'date', 'company_id', 'user_id'];

    public function tags()
    {
        return $this->belongsToMany('TicketTag', 'ticket_tags_2_quick_macroses');
    }
}
