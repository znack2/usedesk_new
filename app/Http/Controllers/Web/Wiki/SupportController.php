
<?php

use App\Repository\ArticleRepository;

class SupportController extends BaseController
{
    protected $articleRepository;

    function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function getIndex()
    {
        return view('user.support.index',[
            'accounts'
        ]);
    }

    public function getAccount($id)
    {
        return view('user.support.account',[
            'account',
            'collections'
        ]);
    }

    public function getEdit($id = null)
    {
        return $view('user.support.edit', [
            'account'
        ]);
    }

    public function getDelete($id)
    {
        return redirect()->route('user.support.get_index');
    }

    public function postEdit($id = null)
    {
        return redirect()->route('user.support.get_account',['id' => $account_id]);
    }

}