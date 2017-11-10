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

    public function testAjax()
    {
        
    }

    public function getPayuBlock() 
    {
       
    }
    
    public function getRetailCrmBlock()
    {
        
    }

    public function getDynamicData()
    {
       
    }
}