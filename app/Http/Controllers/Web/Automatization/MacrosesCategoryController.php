<?php

use App\Repository\CategoryRepository;

class MacrosesCategoryController extends BaseController
{
    protected $categoryRepository;

    function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getDeleteCategory($id, $isPost = false)
    {
       return redirect()->route('user.macroses.get_index');
    }

    public function getCategoryEdit() 
    {
       return json_encode($res, JSON_HEX_QUOT);
    }

    public function getCopyCategory($id, $parent_id = false)
    {
       
    }
}