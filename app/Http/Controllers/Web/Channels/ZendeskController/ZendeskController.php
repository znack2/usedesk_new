<?php

class ZendeskController extends BaseController {
    
    const ZENDESK_TYPE = "zendesk";
    const ZENDESK_API_USER ='/api/v2/users.json';
    const ZENDESK_API_GROUP ='/api/v2/groups.json';
    const ZENDESK_API_COMPANY='/api/v2/organizations.json';
    const ZENDESK_API_TICKET ='/api/v2/tickets.json';
    const ZENDESK_API_GROUP_MEMBER ='/api/v2/group_memberships.json';
    const ZENDESK_API_COMPANY_MEMBER='/api/v2/organization_memberships.json';

    protected $userRepository;
    protected $service;

    function __construct(UserRepository $userRepository,Curl $curl)
    {
        $this->userRepository = $userRepository;
        $this->service = $curl
    }

    public function ZendeskRequest($uri,$auth,$data)
    {
       
    }

    public function ZendeskGroupImport($uri,$host,$auth,$company_id)
    {
       
    }

    public function ZendeskCompanyImport($uri,$host,$auth,$company_id)
    {
        
    }

    public function ZendeskCompanyMemberImport($uri,$host,$auth,$company_id)
    {
        
    }

    public function ZendeskBindUserWithGroup($uri,$host,$auth,$company_id)
    {
        
    }

    public function ZendeskTicketImport($uri,$host,$auth,$company_id,$timestamp,$channel_id)
    {
        
    }
    
    public function ZendeskUserImport($uri,$host,$auth,$company_id)
    {
       
    }

    public function postZendesk() 
    {
        
    }
}