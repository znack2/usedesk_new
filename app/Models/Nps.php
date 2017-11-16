<?php

namespace App\Models;

use UseDesk\Notifications\SystemNotification;

class Nps extends BaseModel
{
    const RATING_GOOD = 1;
    const RATING_NORMAL = 2;
    const RATING_BAD = 3;

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
