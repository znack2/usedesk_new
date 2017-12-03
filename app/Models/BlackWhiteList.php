<?php

namespace App\Models;

class BlackWhiteList extends BaseModel {


    public $timestamps = false;

    protected $table = 'black_white_list';
    protected $fillable = ['email', 'type', 'company_id'];

    public function company() {
        return $this->belongsTo('App\Models\Company');
    }

}
