<?php

use App\Repository\ArticleRepository;
use Illuminate\Support\Facades\Crypt;
use UseDesk\Email\ImapConnection;
use UseDesk\Email\SmtpConnection;
use UseDesk\Google\GmailApi;

class BlocksController extends BaseController
{
    protected $articleRepository;

    function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function getIndex()
    {
       return view('user.company_custom_blocks.index', [
            'activeBlocks',
            'inactiveBlocks'
        ]);
    }

    public function getDelete($id)
    {
        
    }

    public function postSort()
    {
        
    }
}