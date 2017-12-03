<?php

namespace App\Models;

class CompanyWorkingDay extends BaseModel {


    public $timestamps = false;

    protected $table = 'company_working_days';
    protected $fillable = ['day', 'start', 'end', 'is_working', 'company_id'];

    public function company() {
        return $this->belongsTo('App\Models\Company');
    }
}
