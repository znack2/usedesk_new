<?php

class TelephonyClientController extends BaseController {

    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function addTelephonyClient() 
    {
        return view('user.users.addGravitelClient', []);
    }

    public function postTelephonyClient() 
    {
        return redirect()->route('user.edit_gravitel_client', ['id' => $channel_id]);
    }

    public function editTelephonyClient($id)
    {
        return view('user.users.addGravitelClient', [
            'channel',
            'telephony'
        ]);
    }

    public function deleteTelephonyClient($id) 
    {
        return redirect()->route('user.company_email_channels.get_index', []);
    }

    public function postEditTelephonyClient($id)
    {
       
    }

    public function updateKeyTelephonyClient($id) 
    {
        return redirect()->route('user.edit_gravitel_client', ['id' => $id]);
    }
}