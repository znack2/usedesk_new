<?php

namespace App\Models;

use App\Models\BaseModel;

class Company extends BaseModel
{
    const BLOCK_NONE = 'none';
    const BLOCK_ACTIVITY = 'activity';
    const BLOCK_FULL = 'full';

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
        return $this->hasMany('CompanyCustomBlock');
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
        return $this->hasMany('CompanyWorkingDay');
    }

    public function users()
    {
        return $this->hasMany('User');
    }

    public function sla()
    {
        return $this->hasMany('Sla');
    }

    public function emailChannels()
    {
        return $this->hasMany('CompanyEmailChannel');
    }

    public function tickets()
    {
        return $this->hasMany('Ticket');
    }

    public function invoices()
    {
        return $this->hasMany('Invoice');
    }

    public function triggers()
    {
        return $this->hasMany('Trigger');
    }

    public function macroses()
    {
        return $this->hasMany('Macros');
    }

    public function userGroups()
    {
        return $this->hasMany('UserGroup');
    }

    public function blackWhiteList()
    {
        return $this->hasMany('BlackWhiteList');
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
        return $this->hasMany('GetStarted');
    }

    public function mailingSchedule()
    {
        return $this->belongsToMany('MailingSchedule','mailing_schedule_history');
    }
}
