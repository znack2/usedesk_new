<?php

class MacrosesCategoryController extends BaseController
{
    protected $categoryRepository;

    function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getDeleteLogo($account_id)
    {
        return back();
    }

    public function jsonSearch($id) 
    {
        return json_encode($result, JSON_UNESCAPED_UNICODE);
    }

    public function jsonSearchArticle($id) 
    {
       return json_encode($result, JSON_UNESCAPED_UNICODE);
    }
}