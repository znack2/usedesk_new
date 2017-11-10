<?php

class ChatController extends BaseController {


	public function adminChat($chat = false)
    {
			return view('user.chat.dashboard', [
					'user_token' => $token,
					'chat' 
					'client_token' 
					'url' 
					'macroses' 
					'is_chat' 
					'status' 
					'online'
					'disconnect'
					'coobrowser_url'
					'user_groups'
					'is_bot'
			]);
		}else{
			return back();
	}

	public function closeBrowser()
    {
		return $this->view
					->make('user.chat.close');
	}