<?php

namespace App\Models;

class BlackWhiteList extends BaseModel {

    const TYPE_BLACK = 'black';
    const TYPE_WHITE = 'white';

    public $timestamps = false;

    protected $table = 'black_white_list';
    protected $fillable = ['email', 'type', 'company_id'];

    public function company() {
        return $this->belongsTo('Company');
    }

}
