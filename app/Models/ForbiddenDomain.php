<?php

namespace App\Models;

class ForbiddenDomain extends BaseModel {

    public $timestamps = false;

    protected $table = 'forbidden_domains';
    protected $fillable = ['domain'];

}
