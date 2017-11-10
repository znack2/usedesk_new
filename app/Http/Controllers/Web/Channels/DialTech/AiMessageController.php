<?php

class AiMessageController extends BaseController
{
    protected $userRepository;
    protected $service;

    function __construct(UserRepository $userRepository,Curl $curl)
    {
        $this->userRepository = $userRepository;
        $this->service = $curl
    }

	//отправка сообщения в DialTech
	public function createAiMessage($text,$chat_id,$token)
	{
		
	}
	
	//метод возвращает ответы на сообщения для почты 
	public function generateAiMessage($ticket_id,$company_id,$client_id)
	{
		
	}

	//Обновляет таблицу с ответами
	public function updateAiMesage($ticket_id,$message)
	{
		
	}

	//CURL Получение ответа
	public  function getAIMessage($chat_id,$token)
	{
		
	}
}