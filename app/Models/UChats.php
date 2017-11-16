<?php

namespace App\Models;

class UChats extends BaseModel
{
    public $timestamps = false;
    protected $table = 'chats';
    protected $fillable = [];

    public function ticket()
    {
        return $this->belongsTo('Ticket');
    }
}
