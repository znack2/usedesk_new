<?php

namespace App\Services;

class SmsService extends AbstractService{

    public function send($address, $message)
    {
        return SmsRu::send($address, $message);
    }

}
