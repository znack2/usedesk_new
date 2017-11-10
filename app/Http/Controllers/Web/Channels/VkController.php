<?php

class VKController extends BaseController
{
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function vkRenew($id) 
    {
       
    }

    public function vkRenewGetToken($id) 
    {
       
    }

    public function vkLogout() 
    {
       
    }

    public function addVkChannel() 
    {
        
    }

    public function testVkGroupChannel()
    {
    }
    
    public function getVkSubmission($id)
    {
       
    }

    public function postEditVk($id = null) 
    {
      
    }

    public function createVkGroupChannel()
    {
        
    }

    public function createVkChannel() 
    {
        //проверка, включена ли интеграция
        
    }

    public function getVkCallback($id)
    {
        
    }

    public function getVkGroupKey($id)
    {
        
    }
}