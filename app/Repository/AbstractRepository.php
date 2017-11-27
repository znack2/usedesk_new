<?php 

namespace App\Repository;

use Carbon\Carbon;
use Elasticquent\ElasticquentTrait;

abstract class AbstractRepository
{
    use ElasticquentTrait;

    public $categories;
    public $now;
    public $user;

    function __construct()
    {
        $this->now = new Carbon; //date('Y-m-d H:i:s')
//        $this->user = \Auth::user()->user();
    }
}