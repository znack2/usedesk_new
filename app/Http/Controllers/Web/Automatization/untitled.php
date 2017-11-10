<?php

class MacrosController extends BaseController
{
    protected $categoryRepository;

    function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    
    public function getDownloadFile($id) 
    {
        return $this->response
                    ->download($file->file);
    }

    public function getCopyMacros($id, $category = null)
    {
        
    }

    public function postMacrosesPosition()
    {
       
    }

    public function checkMacros($id) 
    {
        return json_encode($res, JSON_HEX_QUOT);
    }
}
