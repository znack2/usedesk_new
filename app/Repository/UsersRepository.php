<?php 

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class UsersRepository extends AbstractRepository
{
    /**
     * @param int $user
     * @return bool
     */
    public function setLastLoginAt($user)
    {
        $company = $user->company;
        $company->setLastLoginAt();
        $company->save();
        return true;
    }
    /**
     * @param int $token
     * @param int $active
     * @return $customBlock
     */
    public function ByToken($token)
	{
	    $date = new Carbon();
	    $salt = "v^Qn*r";
       	return DB::table('users')
                ->whereRaw('MD5(CONCAT(email,?,password,?)) = ?', [$salt,$date->toDateString(), $token])
                ->where('role', User::ROLE_ADMIN)
                ->where('status',true)
                ->where('deleted',false)
                ->first();
    }
    /**
     * @param int $email
     * @return $user
     */
    public function ByEmail($email)
    {
        return DB::table('users')
                ->where('email',$email)
                ->first();
    }
    /**
     * @param int $user
     * @return $user
     */
    public function setPassword($email,$password)
    {
        $user = $this->ByEmail($email);
        $user->password = $password;
        $user->save();
    }
    /**
     * @param int $user
     * @return $user
     */
    public function create($company_id,$user_email,$user_password,$user_name,$company_phone)
    {


        $user = DB::table('users')->create([
            // data['user_email'],
            // data['user_password'],
            // data['user_name'],
            // data['company_phone']
        ]);
    }
}