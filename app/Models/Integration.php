<?php

namespace App\Models;

class Integration extends BaseModel
{
    public $timestamps = false;

    protected $table = 'integration';

    
    protected $fillable = [
        'name',
        'keyword',
        'short_description',
        'type',
        'month_price',
        'year_price',
        'long_description',
        'icon',
        'default_status',
        'status',
    ];
}