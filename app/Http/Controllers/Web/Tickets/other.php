<?php

class MacrosesCategoryController extends BaseController
{
    protected $categoryRepository;
    protected $service;

    function __construct(CategoryRepository $categoryRepository,Curl $curl)
    {
        $this->categoryRepository = $categoryRepository;
        $this->service = $curl
    }


//получение данных по шаблону
    public function getMacrosMessageJson($id)
    {
        
    }
    public function groupUpdate()
    {
        
    }


    public function getClientJson($id)
    {

    }

    public function getClientList()
    {
      
    }

    public function postReplyBehavior()
    {
        
    }

    public function getActivity($id)
    {
       
    }

//обновление клиента
    public function postUpdateClient($id)
    {
       
    }


    public function getTagsOfCompany()
    {
        
    }

    public function getTagsOfCompanyAlt()
    {
        
    }

    public function postUserListByName()
    {
       
    }

    public function postUserListByText()
    {
       
    }

    public function getCreateToIt($id)
    {
       
    }

    // Форматируем отображение размера файла
    public function formatBytes($size, $precision = 2)
    {
       
    }

    public function postCheckEmail() 
    {
       
    }

    public function getTopTags() 
    {
       
    }

    public function getEmailQuote($id)
    {
        
    }
    
    public function getUserEmails()
    {
      
    }

    public function getTicketFieldsContent() 
    {
       
    }

    public function changeTicketChannel($id) 
    {
       
    }
}
