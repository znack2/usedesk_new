<?php

class AIController extends \BaseController {

    protected $userRepository;
    protected $service;

    function __construct(UserRepository $userRepository,Curl $curl)
    {
        $this->userRepository = $userRepository;
        $this->service = $curl
    }
	public function index()
	{
        
	}

	//получает сообщение в тикете на которое нужно ответить
	public function getTextFromTicket($ticket_id)
	{
        
	}

	//проверка интеграции. Включена ли она
	public function checkIntegration($company_id,$keyword)
	{
		
	}

	//изменение настроек бота
	public function setBotSettings($botId,$token,$url)
	{
		
	}
}
