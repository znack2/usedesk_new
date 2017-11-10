<?php

class ZappierController extends BaseController
{
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
	// страница настроек zapier https://devsecure.usedesk.ru/settings/channels/zapier
	public  function  getZappierSettings()
	{
		
	}

	// сохранение настроек
	public  function  postZappierSettings()
	{
		return redirect()->route('user.company_email_channels.get_index');
	}

	public function webhook()
	{
		
	}
}