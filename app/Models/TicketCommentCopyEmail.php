<?php

namespace App\Models;

class TicketCommentCopyEmail extends BaseModel
{
    const TYPE_CC = 'cc';
    const TYPE_BCC = 'bcc';

    public $timestamps = false;

    protected $table = 'ticket_comment_copy_emails';

    protected $fillable = ['ticket_comment_id', 'type', 'email'];

    public function ticketComment()
    {
        return $this->belongsTo('App\Models\TicketComment','ticket_comment_id');
    }
}
