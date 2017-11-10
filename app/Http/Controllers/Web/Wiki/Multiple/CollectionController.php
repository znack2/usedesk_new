<?php

class CollectionController extends BaseController
{
    protected $categoryRepository;

    function __construct(CategoryRepository $categoryRepository,Curl $curl)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function postCollectionDeleteMultiple($account_id)
    {
       
    }

    public function postCollectionCopyMultiple($account_id)
    {

    }
}