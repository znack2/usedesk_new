<?php

namespace App\Models;

class ClientCompany extends BaseModel
{
    public $timestamps = false;

    protected $table = 'client_companies';
    protected $fillable = [
         'name',
         'note',
         'company_id',
         'domains',
         'phone',
         'address',
         'vip'
     ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function clients()
    {
        return $this->hasMany('App\Models\Client');
    }

    public function tags()
    {
        return $this->belongsToMany('TicketTag', 'ticket_tags_2_client_companies', 'client_company_id');
    }
}
