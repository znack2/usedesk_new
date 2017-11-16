<?php

namespace App\Models;

class TriggerAction extends BaseAction {

    public $timestamps = false;

    protected $table = 'trigger_actions';
    protected $fillable = ['action', 'value', 'trigger_id'];

    public function trigger() {
        return $this->belongsTo('Trigger');
    }

    public function files() {
        return $this->hasMany('TriggerActionFile');
    }
}
