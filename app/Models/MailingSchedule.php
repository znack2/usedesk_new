<?php

namespace App\Models;

class MailingSchedule extends BaseModel {

    const STATUS_NOTHING = 'nothing';
    const STATUS_SOME = 'some';
    const STATUS_ALL = 'all';

    public $timestamps = false;

    protected $table = 'mailing_schedule';
    protected $fillable = ['status', 'time_elapsed', 'template'];

    public function companies() {
        return $this->belongsToMany('Company', 'mailing_schedule_history');
    }
}
