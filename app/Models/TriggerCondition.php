<?php

namespace App\Models;

class TriggerCondition extends BaseModel
{

    public $timestamps = false;
    public $regexp_matches = [];

    protected $table = 'trigger_conditions';
    protected $fillable = ['boolean', 'target', 'condition', 'value', 'trigger_id', 'word_form'];

    public function trigger()
    {
        return $this->belongsTo('App\Models\Trigger');
    }


}
