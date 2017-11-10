<?php

use App\Repository\ArticleRepository;

class ArticleController extends BaseController
{
    protected $articleRepository;

    function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }
    
    public function getArticleEdit($account_id, $id = null)
    {
       return $view('user.support.edit_article', [
            'article',
            'account'
        ]);
    }

    public function postArticleEdit($account_id, $id = null)
    {
        return redirect()->route('user.support.get_account',['id' => $account_id]);
    }

    public function getArticleDelete($account_id, $id)
    {
        return redirect()->route('user.support.get_account',['id' => $account_id]);
    }

    public function getArticleCopy($account_id, $id)
    {
        return redirect()->route('user.support.get_account',['id' => $account_id]);
    }

    public function postArticleUpdate($account_id, $id)
    {
        
    }

    public function getArticleList()
    {
       return json_encode($response, JSON_UNESCAPED_UNICODE);
    }

    public function getArticleJson()
    {
       return json_encode($response, JSON_UNESCAPED_UNICODE);
    }
}