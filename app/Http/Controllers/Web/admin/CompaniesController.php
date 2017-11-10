<?php

class CompaniesController extends BaseController
{
    protected $companyRepository;

    function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }

    public function getIndex()
    {
        
    }

    public function getExport()
    {
       
    }

    public function getProfile($id)
    {
        
    }

    public function postProfile($id)
    {
        
    }

    public function getStatistic($id)
    {
        
    }

    public function getInvoices($id)
    {
         
    }

    public function postCreateInvoice($id)
    {
        
    }

    public function getMailing($id)
    {
       
    }

    public function getSendMailing($id, $msid)
    {
      
    }

    public function orderLink($title, $order, $attributes = [])
    {
      
    }

    /**
     * Изменениес статуса интеграции
     */
    public function postChangeStatus($company_id)
    {
       
    }

    public function getVelobikeClientsImportPage()
    {

    }

    public function uploadVelobikeClientsFromFile()
    {
        
    }

    public function getShellyClientsImportPage()
    {
        
    }

    public function uploadShellyClientsFromFile()
    {
       
    }

    public function convertCompanyDataToJson($company_id)
    {
        
    }

    public function getCompanyJsonPage($id)
    {
       
    }

    public function getCompanyEmlPage($id)
    {
       
    }

    public function convertCompanyTicketsToEml($id)
    {
       
    }

    public function getDoublesPage()
    {
      
    }

    public function makeCompanyClientsCache($id)
    {
       
    }

    public function findDoublesByEmail()
    {
        
    }

    public function getTimePage() 
    {
      
    }

    public function countWorkTime($id) 
    {
       
    }

    public function getGaLog() 
    {
       
    }
}
