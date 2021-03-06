<?php 

namespace App\Services;

use Carbon\Carbon;
use App\Helpers\CurlHelper;

abstract class AbstractService
{
    public $curlhelper;
    public $now;
    public $user;

    function __construct()
    {
    	$this->curlhelper = new CurlHelper;
        $this->now = new Carbon; //date('Y-m-d H:i:s')
        $this->user = Auth::user()->user();
    }
}