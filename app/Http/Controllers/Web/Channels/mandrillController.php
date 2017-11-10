<?php

class MandrillController extends BaseController
{
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function postMandrillInbound()
    {
       
    }
    
    public function mandrillBounce()
    {
        
    }

    public function saveMandrillTicketFromDb($companyId, $msg, $timestamp)
    {
        
    }
    
    public function postMandrillNotifications()
    {
        
    }

    public function madrillStatus()
    {
       
    }
}