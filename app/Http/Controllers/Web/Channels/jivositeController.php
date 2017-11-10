<?php

class JivositeController extends BaseController
{
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getCreate()
    {
        //проверка, включена ли интеграция
         return view('user.chat.settings',[
            'statuses'
        ]);
    }

    public function postCreate()
    {
        //проверка, включена ли интеграция
         return redirect()->route('user.company_email_channels.get_index');
    }
    
    public function postEdit($id = null)
    {
        //проверка, включена ли интеграция
        return redirect()->route('user.company_email_channels.get_index');
    }

    public function postWebhook()
    {
        return $this->response
                    ->json($response);
    }
}