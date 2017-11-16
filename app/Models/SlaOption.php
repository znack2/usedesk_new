<?php

namespace App\Models;

class SlaOption extends BaseModel
{
    public $timestamps = false;

    protected $table = 'sla_options';
    protected $fillable = [ 'sla_id', 'sla_option_type_id', 'priority_id', 'value'];

    
    public function sla() {
        return $this->BelongsTo('Sla');
    }

    public function priority() {
        return $this->BelongsTo('SlaPriority');
    }

    public function slaOptionType() {
        return $this->BelongsTo('SlaOptionType');
    }

    public function slaData() {
        return $this->HasMany('SlaData');
    }
}
