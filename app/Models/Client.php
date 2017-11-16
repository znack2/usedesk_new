<?php

namespace App\Models;

class Client extends BaseModel
{
    use AvatarTrait;

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
        return $this->belongsTo('ClientCompany');
    }

    public function company()
    {
        return $this->belongsTo('Company');
    }

    public function phones()
    {
        return $this->hasMany('ClientPhone');
    }

    public function sites()
    {
        return $this->hasMany('ClientSite');
    }

    public function socialNetworks()
    {
        return $this->hasMany('ClientSocialNetwork');
    }

    public function additionalIds()
    {
        return $this->hasMany('ClientAdditionalId');
    }

    public function messengers()
    {
        return $this->hasMany('ClientMessenger');
    }

    public function addresses()
    {
        return $this->hasMany('ClientAddress');
    }

    public function emails()
    {
        return $this->hasMany('ClientEmail');
    }

    public function tickets()
    {
        return $this->hasMany('Ticket');
    }

    public function ticketComments()
    {
        return $this->hasMany('TicketComment');
    }

}
