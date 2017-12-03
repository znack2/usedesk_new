<?php

namespace App\Models;

class Notification extends BaseModel
{

    public $timestamps = false;

    protected $table = 'notifications';

    protected $fillable = [
        'id',
        'keyword',
        'status',
    ];
}