<?php

namespace App\Models;

class ClientAdditionalId extends BaseModel 
{
    public $timestamps = false;

    protected $table = 'client_additional_ids';
    protected $fillable = ['client_id', 'value'];
}
