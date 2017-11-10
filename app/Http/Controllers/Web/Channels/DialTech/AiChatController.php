<?php

class AiChatController extends BaseController
{
    protected $userRepository;
    protected $service;

    function __construct(UserRepository $userRepository,Curl $curl)
    {
        $this->userRepository = $userRepository;
        $this->service = $curl
    }

    //проверка существования чата в DialTech
	public function checkAiChat($ticket_id,$user_id,$token,$ai_client_id){
        
        
	}

	//создание чата в DialTech
	public function createAiChat($user_id, $bot_id, $token)
    {
		
	}
}