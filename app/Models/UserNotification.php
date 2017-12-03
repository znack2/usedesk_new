<?php

namespace App\Models;

class UserNotification extends BaseModel
{
    public $timestamps = false;

    protected $table = 'user_notifications';
    protected $fillable = [
        'ticket_new',
        'ticket_assigned_to_me',
        'ticket_reference_me',
        'ticket_assigned',
        'client_replied_to_unassigned',
        'client_replied_to_my',
        'client_replied_to_assigned',
        'user_replied_to_unassigned',
        'user_replied_to_my',
        'user_replied_to_assigned',
        'user_id'
     ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
