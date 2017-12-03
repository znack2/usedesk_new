<?php

namespace App\Models;

class Monitoring extends BaseModel
{
    public $timestamps = false;


    protected $table = 'monitoring';

    protected $fillable = [
        'id',
        'company_id',
        'enable_admin',
        'enable_user_vk',
        'enable_user_twitter',
        'enable_user_facebook',
        'day_to_archive',
        'max_word_count'
    ];

    public function monitoringKeywords()
    {
        return $this->belongsToMany('MonitoringKeyword', 'monitoring_2_monitoring_keywords');
    }
}