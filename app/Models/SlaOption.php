<?php

namespace App\Models;

class SlaOption extends BaseModel
{
    public $timestamps = false;

    protected $table = 'sla_options';
    protected $fillable = [ 'sla_id', 'sla_option_type_id', 'priority_id', 'value'];

    
    public function sla() {
        return $this->belongsTo('App\Models\Sla');
    }

    public function priority() {
        return $this->belongsTo('App\Models\SlaPriority');
    }

    public function slaOptionType() {
        return $this->belongsTo('App\Models\SlaOptionType');
    }

    public function slaData() {
        return $this->hasMany('App\Models\SlaData');
    }
}
