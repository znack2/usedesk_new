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
        return $this->belongsTo('App\Models\Company');
    }

    public function assignedTickets()
    {
        return $this->hasMany('App\Models\Ticket');
    }

    public function ticketComments()
    {
        return $this->hasMany('App\Models\TicketComment');
    }

    public function notification()
    {
        return $this->hasOne('UserNotification');
    }

    public function userTicketViews()
    {
        return $this->hasMany('App\Models\UserTicketView');
    }

    public function ticketFilters()
    {
        return $this->hasMany('App\Models\TicketFilter');
    }
}
