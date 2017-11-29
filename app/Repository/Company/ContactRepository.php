<?php

namespace App\Repository\Company;

use Illuminate\Support\Facades\DB;
use App\Repository\AbstractRepository;
use \Auth;

class ContactRepository extends AbstractRepository
{
    /**
     * @param int $type
     * @param int $companyId
     * @return $customBlock
     */
    public function current()
    {
        return $customBlock = DB::table('company')->get();
    }
}