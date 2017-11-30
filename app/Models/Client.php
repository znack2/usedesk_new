<?php

namespace App\Models;

class Client extends BaseModel
{
    const TYPE_VIP = 'vip';
    const TYPE_SPAMMER = 'spammer';

    public $timestamps = false;

    protected $table = 'clients';
    protected $fillable = [
        'name',
         'avatar',
         'position',
         'note',
         'spammer',
         'vip',
         'client_company_id',
         'company_id',
         'zendesk_id'
     ];

    public function clientCompany()
    {
        return $this->belongsTo('App\Models\ClientCompany');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function phones()
    {
        return $this->hasMany('App\Models\ClientPhone');
    }

    public function sites()
    {
        return $this->hasMany('App\Models\ClientSite');
    }

    public function socialNetworks()
    {
        return $this->hasMany('App\Models\ClientSocialNetwork');
    }

    public function additionalIds()
    {
        return $this->hasMany('App\Models\ClientAdditionalId');
    }

    public function messengers()
    {
        return $this->hasMany('App\Models\ClientMessenger');
    }

    public function addresses()
    {
        return $this->hasMany('App\Models\ClientAddress');
    }

    public function emails()
    {
        return $this->hasMany('App\Models\ClientEmail');
    }

    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket');
    }

    public function ticketComments()
    {
        return $this->hasMany('App\Models\TicketComment');
    }

}
