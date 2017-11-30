<?php

namespace App\Models;

class MacrosFile extends BaseModel {

//    use FileModelTrait;

    public $timestamps = false;

    protected $table = 'macros_files';
    protected $fillable = ['file', 'macros_id'];
   
    public function macros() {
        return $this->belongsTo('App\Models\Macros');
    }

}
