<?php

namespace App\Models;

class CompanyIntegration extends BaseModel
{
    public $timestamps = false;

    protected $table = 'company_integrations';

    protected $fillable = [
        'integration_id',
        'company_id',
        'status',
    ];
}