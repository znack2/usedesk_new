
<?php

use App\Repository\ArticleRepository;

class CollectionController extends BaseController
{
    protected $articleRepository;

    function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }
    
    public function getCollectionEdit($account_id, $id = null)
    {
       return $view('user.support.edit_collection', [
            'collection',
            'account'
        ]);
    }

    public function postCollectionEdit($account_id, $id = null)
    {
       return redirect()->route('user.support.get_account',['id' => $account_id]);
    }

    public function getCollectionDelete($account_id,$id)
    {
        return redirect()->route('user.support.get_account',['id' => $account_id]);
    }

    public function getCollectionCopy($account_id,$id)
    {
        return redirect()->route('user.support.get_account',['id' => $account_id]);
    }

    public function postCollectionUpdate($account_id)
    {
        
    }
}