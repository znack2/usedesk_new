<?php

namespace App\Models;

class SystemUpdate extends BaseModel {

    const TYPE_PROBLEM = 'problem';
    const TYPE_FEATURE = 'feature';
    const TYPE_ARTICLE = 'article';

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
