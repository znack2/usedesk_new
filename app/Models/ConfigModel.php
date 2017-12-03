<?php

namespace App\Models;

class ConfigModel extends BaseModel {


    public $timestamps = false;

    protected $table = 'config';
    protected $fillable = ['key', 'value'];
}
