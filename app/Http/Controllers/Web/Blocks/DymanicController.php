<?php

use App\Repository\ArticleRepository;

class DymanicController extends BaseController
{
    protected $articleRepository;

    function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

	public function getEditDynamic($id = null)
    {
        return view('user.company_custom_blocks.edit_dynamic', [
            'customBlock' ,
            'params'
        ]);
    }

  	public function postEditDynamic($id = null)
    {
       
    }
}