<?php

class WhatsHelpController extends BaseController
{
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    
//вебхук WhatsHelp
    public function whatsHelp($id)
    {
       
    }

    public function addWhatsHelpClient() 
    {
        return view('user.users.addWhatsHelp', [
            'statuses'=>$statusList,
            'id'
        ]);
    }

    public function postWhatsHelpClient() 
    {
        return redirect()->route('user.company_email_channels.get_index', []);
    }

    public function editWhatsHelpClient($id) 
    {
        
    }

    public function postEditWhatsHelpClient($id) 
    {
        return redirect()->route('user.company_email_channels.get_index', []);
    }

    public function deleteWhatsHelpClient($id) 
    {
        return redirect()->route('user.company_email_channels.get_index', []);
    }
}

    