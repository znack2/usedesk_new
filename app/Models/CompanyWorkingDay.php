<?php

namespace App\Models;

class CompanyWorkingDay extends BaseModel {

    const DAY_MONDAY = 'monday';
    const DAY_TUESDAY = 'tuesday';
    const DAY_WEDNESDAY = 'wednesday';
    const DAY_THURSDAY = 'thursday';
    const DAY_FRIDAY = 'friday';
    const DAY_SATURDAY = 'saturday';
    const DAY_SUNDAY = 'sunday';

    public $timestamps = false;

    protected $table = 'company_working_days';
    protected $fillable = ['day', 'start', 'end', 'is_working', 'company_id'];

    public function company() {
        return $this->belongsTo('Company');
    }
}
