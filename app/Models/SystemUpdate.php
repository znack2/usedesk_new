<?php

namespace App\Models;

class SystemUpdate extends BaseModel {


    public $timestamps = false;

    protected $table = 'system_updates';
    protected $fillable = [
		'type',
		'name',
		'content',
		'button_name',
		'button_url',
		'last_updated_at'
 	];
}
