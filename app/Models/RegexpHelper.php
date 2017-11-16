<?php

namespace App\Models;

class RegexpHelper extends BaseMOdel
{
    public $timestamps = false;

    protected $table = 'regexp_helpers';
    protected $fillable = ['name', 'regexp', 'replace', 'description'];

}
