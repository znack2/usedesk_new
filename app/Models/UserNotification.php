<?php

namespace App\Models;

class UserNotification extends BaseModel
{
    const TYPE_TICKET_NEW = 'ticket_new';
    const TYPE_TICKET_ASSIGNED_TO_ME = 'ticket_assigned_to_me';
    const TYPE_TICKET_REFERENCE_ME = 'ticket_reference_me';
    const TYPE_TICKET_ASSIGNED = 'ticket_assigned';
    const TYPE_CLIENT_REPLIED_TO_UNASSIGNED = 'client_replied_to_unassigned';
    const TYPE_CLIENT_REPLIED_TO_MY = 'client_replied_to_my';
    const TYPE_CLIENT_REPLIED_TO_ASSIGNED = 'client_replied_to_assigned';
    const TYPE_USER_REPLIED_TO_UNASSIGNED = 'user_replied_to_unassigned';
    const TYPE_USER_REPLIED_TO_MY = 'user_replied_to_my';
    const TYPE_USER_REPLIED_TO_ASSIGNED = 'user_replied_to_assigned';

    public $timestamps = false;

    protected $table = 'user_notifications';
    protected $fillable = [
        self::TYPE_TICKET_NEW,
        self::TYPE_TICKET_ASSIGNED_TO_ME,
        self::TYPE_TICKET_ASSIGNED,
        self::TYPE_CLIENT_REPLIED_TO_UNASSIGNED,
        self::TYPE_CLIENT_REPLIED_TO_MY,
        self::TYPE_CLIENT_REPLIED_TO_ASSIGNED,
        self::TYPE_USER_REPLIED_TO_UNASSIGNED,
        self::TYPE_USER_REPLIED_TO_MY,
        self::TYPE_USER_REPLIED_TO_ASSIGNED,
        self::TYPE_TICKET_REFERENCE_ME,
        'user_id'
     ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
