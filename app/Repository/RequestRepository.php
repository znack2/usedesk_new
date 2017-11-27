<?php 

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class RequestRepository extends AbstractRepository
{
    /**
     * @param int $company_id
     * @param int $active
     * @return $customBlock
     */
    public function getBy($email)
    {
        $model = DB::table('PasswordRestoreRequest')->firstOrNew(['email' => $email]);
        return $model;
    }
    /**
     * @param int $company_id
     * @param int $active
     * @return $customBlock
     */
    public function passwordRestoreUpdate($email)
    {
        $model = $this->getBy($email);
        $model->fill([
            'hash' => md5(uniqid(time())),
            'created_at' => $this->carbon(),
        ])->save();
        return $model;
    }
    /**
     * @param int $company_id
     * @param int $active
     * @return $customBlock
     */
    public function createRegistration($data,$smsConfirmation_id = NULL,$confirmed = false)
    {
        $registrationRequest = DB::table('RegistrationRequest')->create();
        $registrationRequest->data = $data;
        $registrationRequest->sms_confirmation_id = $smsConfirmation_id;
        $registrationRequest->requested_at = $this->now;
        $registrationRequest->confirmed = $confirmed;
        $registrationRequest->save();
        return $registrationRequest;
    }
    /**
     * @param int $company_id
     * @param int $active
     * @return $customBlock
     */
     public function getPasswordRestoreByHash($hash) 
     {
        return DB::table('PasswordRestoreRequest')->where('hash',  $hash)->firstOrFail();
     }
    /**
     * @param int $company_id
     * @param int $active
     * @return $customBlock
     */
     public function getRegistrationByHash($hash) 
     {
        return DB::table('RegistrationRequest')->whereRaw('MD5(CONCAT(id, "SALT1313")) = ?', [$hash])->firstOrFail();
     }
    /**
     * @param int $company_id
     * @param int $active
     * @return $customBlock
     */
     public function confirm($hash) 
     {
        $model = $this->getByHash($hash);
        $model->confirmed = true;
        $model->save();
        return $model;
     }
}

                

      