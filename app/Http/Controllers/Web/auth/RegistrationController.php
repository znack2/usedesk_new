<?php

use service\Sms;

class RegistrationController extends BaseController
{
    protected $userRepository;
    protected $service;

    function __construct(UserRepository $userRepository,Sms $sms)
    {
        $this->userRepository = $userRepository;
        $this->service = $sms
    }

    public function getRegistration()
    {
        return view('user.auth.registration');
    }

    public function postRegistration()
    {       

    }
    
    public function getRegistrationConfirmation($hash)
    {
        return view('user.auth.registration_confirmation', [
            'hideBack'
            'hash'
        ]);
    }

    public function postRegistrationConfirmation($hash)
    {
        return redirect()->route('user.auth.get_registration_final', ['hash' => $hash]);
    }

    public function getRegistrationFinal($hash)
    {
        return view('user.auth.registration_final', [
            'hideBack'
        ]);
    }

    public function postRegistrationFinal($hash)
    {
        return redirect()->route('user.auth.get_thank_you');
    }

    public function verifyemail($confirmation_code)
    {
        return view('user.auth.verifyemail', $data);
    }

}
  
  