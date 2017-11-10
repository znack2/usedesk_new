<?php

class SecretController extends BaseController
{
    protected $userRepository;
    protected $service;

    function __construct(UserRepository $userRepository,Mailer $mailer)
    {
        $this->userRepository = $userRepository;
        $this->service = $mailer
    }

 	public function getSecretRegistration()
    {
        return view('user.auth.secret_registration');
    }

    public function postSecretRegistration()
    {
        return redirect()->route('user.auth.get_secret_registration_final', [$var]);
    }

    public function getSecretRegistrationFinal($hash)
    {
        return view('user.auth.secret_registration_final', [
            'hideBack'
        ]);
    }
}