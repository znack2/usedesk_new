<?php

namespace App\Models;

class GetStarted extends BaseModel {


    public $timestamps = false;

    protected $table = 'get_started';
    protected $fillable = ['key', 'done', 'company_id'];

    public function company() {
        return $this->belongsTo('App\Models\Company');
    }
}
