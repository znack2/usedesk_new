<?php

namespace App\Models;

class Report extends BaseModel
{
    public $timestamps = false;

    protected $table = 'reports';
    protected $fillable = ['name', 'regexp', 'replace', 'description'];
}
