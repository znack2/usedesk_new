<?php

namespace App\Models;

class Sla extends BaseModel
{
    public $timestamps = false;

    protected $table = 'sla';
    protected $fillable = ['company_id', 'channel_id', 'use_work_time', 'is_filled'];

    public function options()
    {
        return $this->hasMany('App\Models\SlaOption');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function companyEmailChannel()
    {
        return $this->belongsTo('App\Models\CompanyEmailChannel');
    }
}
