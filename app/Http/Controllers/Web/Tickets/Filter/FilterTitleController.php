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

    public function getChannelFilterTitle()
    {
       
    }

    public function getAssignedFilterTitle()
    {
       
    }

    public function getStatusFilterTitle()
    {
       
    }

    public function getTypeFilterTitle()
    {
        
    }

    public function getPriorityFilterTitle()
    {
        
    }

    public function getAttachmentFilterTitle()
    {
        
    }

    public function getSavedFilterTitle()
    {
       
    }

    public function getActiveSavedFilter()
    {
      
    }
}