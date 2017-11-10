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

    public function makeFilterOptions(array $options = [])
    {
       
    }

    public function makeSavedFilterOptions()
    {
       
    }

    public function saveFilterOptions()
    {

    }
    
    public function getSlaFilterOptions() 
    {
       
    }

    public function getSavedFiltersFromCache()
    {
       
    }

    public function getTicketCountForSavedFilters()
    {
        
    }

    public function getFilterModal($id) 
    {
        
    }

    public function getParamsFilter()
    {
        
    }

    public function allowSaveFilter()
    {
        
    }
}