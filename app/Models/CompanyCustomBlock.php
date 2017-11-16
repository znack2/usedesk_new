<?php

namespace App\Models;

class CompanyCustomBlock extends BaseModel
{
    const TYPE_STATIC = 'static';
    const TYPE_DYNAMIC = 'dynamic';

    public $timestamps = false;

    protected $table = 'company_custom_blocks';
    protected $fillable = [
		'company_id',
		'type',
		'name',
		'title',
		'text',
		'url',
		'secret_key',
		'sort',
		'active'
 	];

    public function company()
    {
        return $this->belongsTo('Company');
    }
}
