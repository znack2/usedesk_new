<?php

use App\Repository\ArticleRepository;

class StaticController extends BaseController
{
    protected $articleRepository;

    function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function getEditStatic($id = null)
    {
         return view('user.company_custom_blocks.edit_static', [
            'customBlock'
        ]);
    }

    public function postEditStatic($id = null)
    {
        
    }
}