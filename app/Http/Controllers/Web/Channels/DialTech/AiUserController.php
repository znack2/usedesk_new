<?php

class AiUserController extends BaseController
{
    protected $userRepository;
    protected $service;

    function __construct(UserRepository $userRepository,Curl $curl)
    {
        $this->userRepository = $userRepository;
        $this->service = $curl
    }
	//проверка клиента в DialTech
	public function checkAiClient($client_id,$token)
	{

	}

	// создание юзера в DialTech
	public function createAiUser($name,$token)
	{
		
	}

	//удаление юзера в DialTech
	public function deleteAiUser($userId)
	{
		
	}
}