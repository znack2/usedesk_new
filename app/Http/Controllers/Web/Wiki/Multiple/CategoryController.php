<?php

class CategoryController extends BaseController
{
    protected $categoryRepository;

    function __construct(CategoryRepository $categoryRepository,Curl $curl)
    {
        $this->categoryRepository = $categoryRepository;
    }
    
    public function postCategoryCopyMultiple($account_id)
    {
        
    }

    public function postCategoryDeleteMultiple($account_id)
    {
       
    }
}