<?php

namespace App\Models;

class Sla extends BaseModel
{
    public $timestamps = false;

    protected $table = 'sla';
    protected $fillable = ['company_id', 'channel_id', 'use_work_time', 'is_filled'];

    public function options()
    {
        return $this->hasMany('SlaOption');
    }

    public function company()
    {
        return $this->BelongsTo('Company');
    }

    public function companyEmailChannel()
    {
        return $this->BelongsTo('CompanyEmailChannel');
    }
}
