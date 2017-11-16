<?php

namespace App\Models;

class SlaPriority extends BaseModel
{
    const LOW = 'low';
    const MEDIUM = 'medium';
    const URGENT = 'urgent';
    const EXTREME = 'extreme';

    protected $table = 'sla_priorities';
    protected $fillable = [ 'key'];
}
