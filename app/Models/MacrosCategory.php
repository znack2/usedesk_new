<?php

namespace App\Models;

class MacrosCategory extends BaseModel
{
    public $timestamps = false;

    protected $table = 'macros_categories';
    protected $fillable = [ 'name', 'depth', 'parent_id', 'company_id' ];

    public function macroses() {
        return $this->belongsToMany('Macros', 'macroses_to_macros_categories');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\MacrosCategory', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\MacrosCategory', 'parent_id');
    }
}
