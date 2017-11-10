<?php

class AiTokenController extends BaseController
{
    protected $userRepository;
    protected $service;

    function __construct(UserRepository $userRepository,Curl $curl)
    {
        $this->userRepository = $userRepository;
        $this->service = $curl
    }
    
	// проверка токена в DialTech
	public function checkToken($company_id)
	{
		
	}

	//получение токена DialTech
	public function getAiToken($client_id,$client_secret)
	{
		
	}
}