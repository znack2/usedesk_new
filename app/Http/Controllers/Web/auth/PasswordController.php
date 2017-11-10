<?php

class PasswordController extends BaseController
{
    protected $userRepository;
    protected $service;

    function __construct(UserRepository $userRepository,Mailer $mailer)
    {
        $this->userRepository = $userRepository;
        $this->service = $mailer
    }

    public function getPasswordRestore()
    {
        return view('user.auth.password_restore');
    }
    
    public function postPasswordRestore()
    {
        return back()->with('message_success', trans('text.password_recovery_mess'));
    }

    public function getPasswordRestoreNew($hash)
    {
         return view('user.auth.password_restore_new');
    }

    public function postPasswordRestoreNew($hash)
    {
         return redirect()->route('user.auth.get_login');
    }
}

