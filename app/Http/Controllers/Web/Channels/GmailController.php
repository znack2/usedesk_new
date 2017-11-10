<?php

class GmailController extends BaseController
{
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
    public function getGoogleOauth()
    {
       
    }

    public function getGmail()
    {
        return redirect()->route('user.company_email_channels.get_index');
    }
}