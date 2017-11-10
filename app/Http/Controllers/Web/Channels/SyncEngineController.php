<?php

//Тут собраны вебхуки для интеграций
class SyncEngineController extends BaseController {

    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function syncEngine()
    {
        
    }

    public function saveFromSyncEngine()
    {
        
    }
    
    public function getEditSyncEngine($id = null) 
    {

    }

    public function postEditSyncEngine($id = null) 
    {
        
    }
}

