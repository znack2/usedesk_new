<?php

namespace App\Models;

class CompanyCustomBlockParam extends BaseModel
{
    public $timestamps = false;

    protected $table = 'company_custom_block_params';
    protected $fillable = ['company_custom_block_id', 'key', 'value'];

    public function block()
    {
        return $this->belongsTo('CompanyCustomBlock');
    }

}
