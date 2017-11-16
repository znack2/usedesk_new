<?php

namespace App\Models;

class Widget extends BaseModel
{

    public $timestamps = false;

    protected $table = 'widget';
    protected $fillable = [
    	'channel_id',
		'position',
		'button_text',
		'button_color',
		'button_text_color',
		'display_email',
		'company_email',
		'display_phone',
		'company_phone',
		'company_id'
     ];

    public function company()
    {
        return $this->belongsTo('Company');
    }

}
