<?php

namespace App\Models;

class Category extends BaseModel
{

    public $timestamps = false;

    protected $table = 'uh_categories';
    protected $fillable = [
        'title',
        'description',
        'order',
        'collection_id',
    ];
}
