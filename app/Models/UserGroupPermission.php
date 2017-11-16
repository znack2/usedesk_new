<?php

namespace App\Models;

class UserGroupPermission extends BaseModel
{
    const PERMISSION_TICKETS = 'tickets';
    const PERMISSION_CLIENTS = 'clients';
    const PERMISSION_REPORTS = 'reports';
    const PERMISSION_CHANNELS = 'channels';
    const PERMISSION_MACROSES = 'macroses';
    const PERMISSION_TRIGGERS = 'triggers';
    const PERMISSION_SETTINGS = 'settings';
    const PERMISSION_BILLING = 'billing';
    const PERMISSION_SUPPORT = 'support';
    const PERMISSION_BLOCKS = 'blocks';

    public $timestamps = false;

    protected $table = 'user_group_permissions';
    protected $fillable = ['name'];

    public function groups()
    {
        return $this->belongsToMany('UserGroup', 'ugp_2_ug');
    }

}
