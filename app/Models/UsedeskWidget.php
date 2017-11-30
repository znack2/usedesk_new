<?php

namespace App\Models;

class UsedeskWidget extends BaseModel
{
    public $timestamps = false;

    protected $table = 'usedesk_widget';
    protected $fillable = [
        'company_id',
        'company_email_channel_id',
        'title',
        'color',
        'icon',
        'attachment',
        'topics',
        'auto_init',
        'z_index',
        'docs',
        'language',
        'support_account_id'
     ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function channel()
    {
        return $this->belongsTo('App\Models\CompanyEmailChannel');
    }

    public function account()
    {
        return $this->belongsTo('App\Models\Account');
    }
}
