<?php

namespace App\Models;

// 4.2
// use Illuminate\Auth\UserInterface;
// use Illuminate\Auth\UserTrait;
// extends BaseModel implements UserInterface
// use UserTrait;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const LANG_EN = 'en';
    const LANG_RU = 'ru';
    const LANG_ES = 'es';
    const ROLE_ADMIN = 'admin';
    const ROLE_EMPLOYEE = 'employee';
    const ROLE_SUPPORT = 'support';
    const REPLY_BEHAVIOR_CURRENT = 'current';
    const REPLY_BEHAVIOR_NEXT = 'next';
    const REPLY_BEHAVIOR_LIST = 'list';

    public $timestamps = false;

    protected $table = 'users';
    protected $fillable = [
        'email',
        'avatar',
        'my_signature',
        'use_signature',
        'name',
        'position',
        'phone',
        'note',
        'role',
        'lang',
        'is_first',
        'reply_behavior',
        'company_id',
        'last_su_viewed',
        'zendesk_id'
     ];

    protected $hidden = array('password','remember_token');

    public function groups()
    {
        return $this->belongsToMany('UserGroup', 'users_2_user_groups');
    }

    public function company()
    {
        return $this->belongsTo('Company');
    }

    public function assignedTickets()
    {
        return $this->hasMany('Ticket');
    }

    public function ticketComments()
    {
        return $this->hasMany('TicketComment');
    }

    public function notification()
    {
        return $this->hasOne('UserNotification');
    }

    public function userTicketViews()
    {
        return $this->hasMany('UserTicketView');
    }

    public function ticketFilters()
    {
        return $this->hasMany('TicketFilter');
    }
}
