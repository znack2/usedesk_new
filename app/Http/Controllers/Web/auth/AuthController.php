<?php

use App\Repositories\UserRepository;

class AuthController extends BaseController
{
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        
    }

    public function getLogin()
    {
        return view('user.auth.login');
    }

    public function getThankYou()
    {
        return view('user.auth.thank_you');
    }

    public function getLogout()
    {
        return redirect()->route('user.auth.get_login');
    }

    public function postLogin()
    {
       
    }

    public function getLoginToken()
    {
       
    }

    public function redirectByHash($hash) 
    {

    }
}
