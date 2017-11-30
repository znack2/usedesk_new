<?php

namespace App\Models;

class Macros extends BaseModel {

    public $timestamps = false;

    protected $table = 'macroses';
    protected $fillable = [
        'name',
        'message',
        'enabled',
        'company_id',
        'for_user_id',
        'privacy',
        'updated_at',
        'changed_by_user'
    ];

    public function company() {
        return $this->belongsTo('App\Models\Company');
    }

    public function files() {
        return $this->hasMany('App\Models\MacrosFile');
    }

    public function changedBy() {
        return $this->belongsTo('App\Models\User', 'changed_by_user');
    }

    public function groups()
    {
        return $this->belongsToMany('UserGroup', 'macroses_2_user_groups');
    }

    public function category() {
        return $this->belongsToMany('MacrosCategory', 'macroses_to_macros_categories');
    }
   
    public function actions() {
        return $this->hasMany('App\Models\MacrosAction');
    }

    public function macrosHistory() {
        return $this->hasMany('App\Models\MacrosHistory');
    }
}
