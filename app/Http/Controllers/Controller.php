<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
     // $value = $request->session()->get('currentCompany');
     // $value = $request->session()->get('user');

    public $currentUser;
    public $CurrentCompany;
    public $now = null;

    public function __construct(Auth $auth)
    {
        $this->currentUser = $auth->user();
        $this->now = Carbon::now();
        $this->CurrentCompany = Company::current(); // $this->request->get('company_id') ?: Company::current();
    }
    
    public function logs($e)
    {
        return Log::alert($e);
    }
}
