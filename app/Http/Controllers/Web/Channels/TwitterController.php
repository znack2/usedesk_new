<?php

class TwitterController extends BaseController
{
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function addTwitterChannel() 
    {
        return redirect()->route('user.company_email_channels.index');
    }

    public function createTwitterChannel() 
    {
       
    }
}