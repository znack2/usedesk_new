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
        return $this->belongsTo('App\Models\Company');
    }

    public function conditions() {
        return $this->hasMany('App\Models\TriggerCondition');
    }

    public function actions() {
        return $this->hasMany('App\Models\TriggerAction');
    }

    public function triggerHistory() {
        return $this->hasMany('App\Models\TriggerHistory');
    }
}
