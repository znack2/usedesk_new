<?php

namespace App\Models;

class TicketCommentCopyEmail extends BaseModel
{


    public $timestamps = false;

    protected $table = 'ticket_comment_copy_emails';

    protected $fillable = ['ticket_comment_id', 'type', 'email'];

    public function ticketComment()
    {
        return $this->belongsTo('App\Models\TicketComment','ticket_comment_id');
    }
}
