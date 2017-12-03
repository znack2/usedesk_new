<?php

namespace App\Models;

class NpsSetting extends BaseModel
{
//    use \UseDesk\Lang\LanguageListTrait;
        
    protected $table = 'nps_settings';
    protected $fillable = [
        'channel_type',
        'condition',
        'company_id',
        'text',
        'active',
        'ticket_status',
        'csi_lang'
    ];
}
