<?php

namespace App\Models;

class MonitoringClass extends BaseModel
{
    public $timestamps = false;

    protected $table = 'monitoring_classes';
    protected $fillable = [
        'id', 'name', 'company_id', 'title'
    ];
}