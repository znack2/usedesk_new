<?php

namespace App\Models;

class Account extends BaseModel
{
    public $timestamps = false;

    protected $table = 'uh_accounts';
    protected $fillable = [
        'title',
        'logo',
        'bg_color',
        'header_color',
        'text_color',
        'link_bg',
        'link_color',
        'nav_link_color',
        'header_code',
        'footer_code',
        'site_url',
        'home_link_text',
        'email',
        'description',
        'domain',
        'company_id',
    ];


}
