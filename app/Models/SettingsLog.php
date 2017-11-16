<?php

namespace App\Models;

class SettingsLog extends BaseModel
{
    public $timestamps = false;

    protected $table = 'settings_log';
    protected $fillable = [
		'id',
		'model_id',
		'model_name',
		'type',
		'module',
		'user_id',
		'company_id',
		'admin_id',
		'changes',
		'changed_at'
 	];
    protected $dates = ['changed_at'];
}
