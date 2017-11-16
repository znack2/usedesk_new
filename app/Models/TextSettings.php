<?php

namespace App\Models;

class TextSettings extends BaseModel
{
    public $timestamps = false;

    protected $table = 'text_settings';
    protected $fillable = ['use_typographer', 'company_id'];

    public function company()
    {
        return $this->belongsTo('Company');
    }
}
