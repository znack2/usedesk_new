<?php

namespace App\Models;

class NotificationToUser extends BaseModel
{
    public $timestamps = false;

    protected $table = 'notification_to_user';

    protected $fillable = [
        'id',
        'notification_id',
        'user_id',
        'status',
    ];
}