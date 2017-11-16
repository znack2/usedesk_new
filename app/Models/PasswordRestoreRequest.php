<?php

namespace App\Models;

class PasswordRestoreRequest extends BaseModel {

    public $timestamps = false;

    protected $table = 'password_restore_request';
    protected $fillable = ['email', 'hash', 'created_at'];
}
