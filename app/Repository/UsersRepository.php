<?php 

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class UsersRepository extends AbstractRepository
{

    public function setLastLoginAt($user)
    {
        $company = $user->company;
        $company->setLastLoginAt();
        $company->save();
        return true;
    }
      
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
}