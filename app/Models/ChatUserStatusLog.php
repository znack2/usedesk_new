<?php

namespace App\Models;

class ChatUserStatusLog extends BaseModel
{
    public $timestamps = false;

    protected $table = 'chat_user_status_log';
    protected $fillable = [ 'user_id', 'company_id', 'action', 'date'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
