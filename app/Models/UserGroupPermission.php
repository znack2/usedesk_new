<?php

namespace App\Models;

class UserGroupPermission extends BaseModel
{


    public $timestamps = false;

    protected $table = 'user_group_permissions';
    protected $fillable = ['name'];

    public function groups()
    {
        return $this->belongsToMany('UserGroup', 'ugp_2_ug');
    }

}
