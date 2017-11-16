<?php

namespace App\Models;

class MonitoringKeyword extends BaseModel
{
    public $timestamps = false;

    protected $table = 'monitoring_keywords';
    protected $fillable = [
        'id',
        'word',
        'last_update_vk',
        'last_update_twitter',
        'last_update_facebook'
    ];

    public function monitoring()
    {
        return $this->belongsToMany('Monitoring', 'monitoring_2_monitoring_keywords');
    }
}