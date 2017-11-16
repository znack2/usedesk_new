<?php

namespace App\Models;

class SCollection extends BaseModel
{
    public $timestamps = false;

    protected $table = 'uh_collections';
    protected $fillable = [
        'title',
        'description',
        'public',
        'order',
        'account_id',
    ];
}
