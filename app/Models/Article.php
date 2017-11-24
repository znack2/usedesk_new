<?php

namespace App\Models;

class Article extends BaseModel
{

    public $timestamps = false;

    protected $table = 'uh_articles';
    protected $fillable = [
        'title',
        'text',
        'public',
        'created_at',
        'category_id',
    ];
}
