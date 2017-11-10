<?php

class ChatController extends BaseController
{
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

	public function getChatSettings()
	{
		return view('user.chat.chat_settings', [
				'widget'
		]);
	}
    
	public function postChatSettings()
	{
		return back();
	}


}