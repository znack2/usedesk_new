<?php

class FbController extends BaseController
{
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

  	public function addFbChannel() 
    {
        return view('user.company_email_channels.addFbChannel', [
            'userFbGroups'
            'userFbId'
        ]);
    }

    public function createFbChannel() 
    {
       
    }

    public function checkFbGroup($id) 
    {
       
    }

    public function getFbCallback()
    {
       
    }
}