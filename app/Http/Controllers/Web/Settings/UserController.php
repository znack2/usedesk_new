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

	public  function getUsers()
	{
		
	}

	public  function createUser()
	{
		
	}

	public  function updateUser()
	{
		
	}
}


