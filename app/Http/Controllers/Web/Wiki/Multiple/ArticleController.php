<?php

class ArticleController extends BaseController
{
    protected $categoryRepository;

    function __construct(CategoryRepository $categoryRepository,Curl $curl)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function postArticleDeleteMultiple($account_id)
    {
        
    }
    
    public function postArticleCopyMultiple($account_id)
    {
        
    }
}