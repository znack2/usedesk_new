<?php

namespace App\Models;

class UserGroup extends BaseModel
{

    public $timestamps = false;

    protected $table = 'user_groups';
    protected $fillable = ['name', 'company_id'];

    
    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function permissions()
    {
        return $this->belongsToMany('UserGroupPermission', 'ugp_2_ug');
    }

    public function users()
    {
        return $this->belongsToMany('User', 'users_2_user_groups');
    }

    public function macros()
    {
        return $this->belongsToMany('Macros', 'macroses_2_user_groups');
    }

    public function channels()
    {
        return $this->belongsToMany('CompanyEmailChannel', 'group_channel_permissions', 'group_id', 'channel_id');
    }
}
