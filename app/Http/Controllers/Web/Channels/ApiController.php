<?php

class ApiController extends BaseController
{
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
    public function addApiClient() 
    {
        return view('user.users.addApiClient', []);
    }

    public function postApiClient() 
    {
        return redirect()->route('user.edit_api_client', ['id' => $api->id]);
    }

    public function editApiClient($id) 
    {
       return view('user.users.editApiClient', [
            'api',
            'settings'
        ]);
    }

    public function postEditApiClient($id) 
    {
        return back();
    }

    public function deleteApiClient($id) 
    {
        return redirect()->route('user.api_client', []);
    }

    public function updateSecretApiClient($id) 
    {
        return back();
    }

    public  function apiGetClient()
    {
            
    }
}


    
