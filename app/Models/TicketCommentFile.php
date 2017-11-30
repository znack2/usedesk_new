<?php

namespace App\Models;

use Illuminate\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\File;

class TicketCommentFile extends BaseModel {

//    use FileModelTrait;

    public $timestamps = false;

    protected $table = 'ticket_comment_files';
    protected $fillable = ['file', 'ticket_comment_id'];

    public function comment() {
        return $this->belongsTo('App\Models\TicketComment', 'ticket_comment_id');
    }
}
