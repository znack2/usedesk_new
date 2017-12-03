<?php

namespace App\Models;

use App\Models\BaseModel;

class Company extends BaseModel
{


    protected static $currentCompany;

    public $timestamps = false;

    protected $table = 'companies';
    protected $fillable = [
         'name',
         'logotype',
         'timezone',
         'import_enabled',
         'signature_enabled',
         'blocked',
         'last_login_at',
         'registered_at',
         'get_started',
         'users_number',
         'lang'
     ];

    public function blocks()
    {
        return $this->hasMany('App\Models\CompanyCustomBlock');
    }

    public function contacts()
    {
        return $this->hasOne('CompanyContacts');
    }

    public function billing()
    {
        return $this->hasOne('CompanyBilling');
    }

    public function workingDays()
    {
        return $this->hasMany('App\Models\CompanyWorkingDay');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function sla()
    {
        return $this->hasMany('App\Models\Sla');
    }

    public function emailChannels()
    {
        return $this->hasMany('App\Models\CompanyEmailChannel');
    }

    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket');
    }

    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice');
    }

    public function triggers()
    {
        return $this->hasMany('App\Models\Trigger');
    }

    public function macroses()
    {
        return $this->hasMany('App\Models\Macros');
    }

    public function userGroups()
    {
        return $this->hasMany('App\Models\UserGroup');
    }

    public function blackWhiteList()
    {
        return $this->hasMany('App\Models\BlackWhiteList');
    }

    public function textSettings()
    {
        return $this->hasOne('TextSettings');
    }

    public function widget()
    {
        return $this->hasOne('Widget');
    }

    public function getStarted()
    {
        return $this->hasMany('App\Models\GetStarted');
    }

    public function mailingSchedule()
    {
        return $this->belongsToMany('MailingSchedule','mailing_schedule_history');
    }
}
