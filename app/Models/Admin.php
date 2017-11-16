<?php

namespace App\Models;

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class Admin extends BaseModel implements UserInterface {

    use UserTrait;

    public $timestamps = false;

    protected $table = 'admins';
    protected $fillable = ['email'];
    protected $hidden = array('password', 'remember_token');
}
