<?php

class ImportController extends BaseController {
    
    const QUEUE_USER ='users';
    const QUEUE_TICKET ='tickets';
    const QUEUE_GROUP ='groups';
    const QUEUE_COMPANY ='companies';
    const QUEUE_BIND_GROUP ='bind_group';
    const QUEUE_BIND_COMPANY ='bind_company';
  
    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getIndex() 
    {
       return view('user.import.index', [
            'canImport'
            'connection'
            'import'
            'queue' =>$queueArr,
            'date'
        ]);
    }

    public function startZendeskImportUsers()
    {
        return redirect()->route('/settings/import');
    }

    public function startZendeskImportCompanies()
    {
        return redirect()->route('/settings/import');
    }
    
    public function startZendeskImportTickets()
    {
        return redirect()->route('/settings/import');
    }

    public function postZendeskImport()
    {
        return redirect()->route('/settings/import');
    }
}
