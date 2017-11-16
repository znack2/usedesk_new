<?php

namespace App\Models;

class MacrosHistory extends BaseModel {

    public $timestamps = false;

    protected $table = 'macros_history';
    protected $fillable = ['macros_id', 'used_at', 'ticket_id'];

    public function macros() {
        return $this->belongsTo('Macros');
    }

}
