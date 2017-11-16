<?php

namespace App\Models;

class TriggerHistory extends BaseModel {

    public $timestamps = false;

    protected $table = 'trigger_history';
    protected $fillable = ['trigger_id', 'updated_tickets', 'updated_users', 'started_at'];

    public function trigger() {
        return $this->belongsTo('Trigger');
    }
}
