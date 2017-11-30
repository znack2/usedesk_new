<?php

namespace App\Models;

class AiMessage extends BaseModel
{
    public $timestamps = false;
    protected $dates = [
        'updated_at'
    ];

    protected $table = 'ai_messages';
    protected $fillable = [
        'ticket_id',
        'ai_chat_id',
        'message',
        'updated_at'
    ];

    public function ticket() 
    {
        return $this->belongsTo('App\Models\Ticket');
    }


}
