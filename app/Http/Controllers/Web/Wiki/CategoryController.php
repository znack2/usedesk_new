<?php

use App\Repository\ArticleRepository;

class CategoryController extends BaseController
{
    protected $articleRepository;

    function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }
    
    public function getCategoryEdit($account_id, $id = null)
    {
       return $view('user.support.edit_category', [
            'category',
            'account'
        ]);
    }

    public function postCategoryEdit($account_id, $id = null)
    {
        return redirect()->route('user.support.get_account',['id' => $account->id]);
    }

    public function getCategoryDelete($account_id, $id)
    {
        return redirect()->route('user.support.get_account',['id' => $account->id]);
    }

    public function getCategoryCopy($account_id, $id)
    {
        return redirect()->route('user.support.get_account',['id' => $account->id]);
    }

    public function postCategoryUpdate($account_id, $id)
    {
        
    }
}