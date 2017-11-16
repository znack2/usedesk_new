<?php

namespace App\Models;

class SlaOptionType extends BaseModel
{
    const FIRST_REPLY_TIME = 'first_reply_time';
    const NEXT_REPLY_TIME = 'next_reply_time';
    const CLOSE_TIME = 'close_time';

    protected $table = 'sla_option_types';
    protected $fillable = [ 'key'];
}
