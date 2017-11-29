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
    public function getPasswordByEmail($email)
    {
        $model = DB::table('PasswordRestoreRequest')
                    ->firstOrNew(['email' => $email]);
        return $model;
    }
    /**
     * @param int $company_id
     * @param int $active
     * @return $customBlock
     */
    public function passwordUpdate($email,$hash)
    {
        $model = $this->getPasswordByEmail($email);
        $model->fill([
            'hash' => $hash,
            'created_at' => $this->carbon(),
        ])->save();
        return $model;
    }
    /**
     * @param int $company_id
     * @param int $active
     * @return $customBlock
     */
     public function getPasswordByHash($hash) 
     {
        return DB::table('PasswordRestoreRequest')
            ->where('hash',  $hash)
            ->firstOrFail();
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
     public function getRegistrationByHash($hash) 
     {
        return DB::table('RegistrationRequest')
            ->whereRaw('MD5(CONCAT(id, "SALT1313")) = ?', [$hash])
            ->firstOrFail();
     }
    /**
     * @param int $hash
     * @return $customBlock
     */
     public function confirmRegistration($hash) 
     {
        $model = $this->getRegistrationByHash($hash);
        $model->confirmed = true;
        $model->save();
        return $model;
     }
    /**
     * @param int $company_id
     * @param int $active
     * @return $customBlock
     */
    public function registrationUpdate($registrationRequest,$data)
    {
        $registrationRequest->data = $registrationRequest->data + $data['user_password','company_users_number'];
        if (!$secret_reg) {
            $registrationRequest->data = $registrationRequest->data + $data['email'];
        }
        $registrationRequest->save();
        return $registrationRequest;
    }


            
}

                

      