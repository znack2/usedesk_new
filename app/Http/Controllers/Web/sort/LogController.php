<?php

use app\repositories\logs\LogRepository;

class ApiLogController extends BaseController {

    protected $logRepository;

    function __construct(LogRepository $logRepository)
    {
        $this->logRepository = $logRepository;
    }
	public function apiLogRequest($method,$option,$channel_id)
	{

	}

	public function apiLogSetError($id,$code)
	{

	}

	public function apiLogSetResponse($id,$response)
	{

	}

 	public function apiLog()
 	{

    }

	public function apiError($code,$log_id=0)
	{
		
	}
}
