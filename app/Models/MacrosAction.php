<?php

namespace App\Models;

class MacrosAction extends BaseAction {

    public $timestamps = false;

    protected $table = 'macros_actions';
    protected $fillable = ['action', 'value', 'macros_id'];

    public function macros() {
        return $this->belongsTo('Macros');
    }

}
