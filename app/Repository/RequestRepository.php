<?php 

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class RequestRepository extends AbstractRepository
{

    public function passwordRestoreUpdate($email)
    {
        $model = DB::table('PasswordRestoreRequest')->firstOrNew(['email' => $email]);
        return $model;
    }

    public function passwordRestoreUpdate($email)
    {
        $model = $this->getBy($email);
        $model->fill([
            'hash' => md5(uniqid(time())),
            'created_at' => $this->carbon(),
        ])->save();
         return $model;
    }

    public function createRegistration($data,$smsConfirmation_id = NULL,$confirmed = false)
    {
        return $registrationRequest = DB::table('RegistrationRequest')->create();
            $registrationRequest->data = $data;
            $registrationRequest->sms_confirmation_id = $smsConfirmation_id;
            $registrationRequest->requested_at = $this->now;
            $registrationRequest->confirmed = $confirmed;
            $registrationRequest->save();
    }

     public function getPasswordRestoreByHash($hash) 
     {
        return DB::table('PasswordRestoreRequest')->where('hash',  $hash)->firstOrFail();
     }
     
     public function getRegistrationByHash($hash) 
     {
        return DB::table('RegistrationRequest')->whereRaw('MD5(CONCAT(id, "SALT1313")) = ?', [$hash])->firstOrFail();
     }

     public function confirm($hash) 
     {
        $model = $this->getByHash($hash);
        $model->confirmed = true;
        $model->save();
        return $model;
     }
}

                

      