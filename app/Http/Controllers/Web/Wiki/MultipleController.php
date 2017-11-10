<?php

use App\Repository\ArticleRepository;

class MultipleController extends BaseController
{
    protected $articleRepository;

    function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }
}