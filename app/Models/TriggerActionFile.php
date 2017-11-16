<?php

namespace App\Models;

class TriggerActionFile extends BaseModel {

    use FileModelTrait;

    public $timestamps = false;

    protected $table = 'trigger_action_files';
    protected $fillable = ['file', 'trigger_action_id'];

    public function triggerAction() {
        return $this->belongsTo('TriggerAction', 'trigger_action_id');
    }
}
