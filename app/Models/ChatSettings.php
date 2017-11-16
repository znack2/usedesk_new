<?php

namespace App\Models;

class ChatSettings extends BaseModel
{

    public $timestamps = false;

    protected $table = 'chat_settings';
    protected $fillable = [
		'company_id',
		'channel_id',
		'color',
		'icon',
		'attachment',
		'topics',
		'auto_init',
		'z_index',
		'docs',
		'language',
		'reaction',
		'reaction_text',
		'greeting_text',
		'b_сolor',
		'header_text_color',
		'powered_by',
		'trigger_name'
	];

    public function company()
    {
        return $this->belongsTo('Company');
    }
}
