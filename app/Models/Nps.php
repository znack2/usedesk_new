<?php

namespace App\Models;

use UseDesk\Notifications\SystemNotification;

class Nps extends BaseModel
{

    protected $table = 'nps';
    protected $fillable = [ 
		'client_id',
		'ticket_id',
		'rating',
		'company_id',
		'comment',
		'ticket_comment_id'
 	];
}
