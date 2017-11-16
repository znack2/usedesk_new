<?php

namespace App\Models;

class RegistrationRequest extends BaseModel {

    public $timestamps = false;

    protected $table = 'registration_requests';
    protected $fillable = ['data', 'sms_confirmation_id', 'requested_at', 'confirmed'];

    public function smsConfirmation() {
        return $this->belongsTo('SmsConfirmation');
    }
}
