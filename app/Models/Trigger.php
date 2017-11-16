<?php

namespace App\Models;

class Trigger extends BaseModel {

    public $timestamps = false;

    protected $table = 'triggers';
    protected $fillable = [
        'name',
        'enabled',
        'manual_starting',
        'position',
        'company_id',
        'use_word_forms'
    ];

    public function company() {
        return $this->belongsTo('Company');
    }

    public function conditions() {
        return $this->hasMany('TriggerCondition');
    }

    public function actions() {
        return $this->hasMany('TriggerAction');
    }

    public function triggerHistory() {
        return $this->hasMany('TriggerHistory');
    }
}
