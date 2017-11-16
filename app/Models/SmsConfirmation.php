<?php

namespace App\Models;

class SmsConfirmation extends BaseModel {

    protected $table = 'sms_confirmations';
    protected $fillable = ['to', 'code'];

    public function registrationRequest() {
        return $this->hasOne('RegistrationRequest');
    }

    public function setRandomCode() {
        $this->code = rand(1000, 9999);
    }

}
