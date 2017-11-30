<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use \Auth;

//use App\Jobs\TestJob;
//use Dingo\Api\Routing\Helpers;

class Controller extends BaseController
{
//use Helpers;
////@return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
////@return \Illuminate\Http\Response
//public function store(Request $request)
//{
//    // $payload = app('request')->only('username', 'password');
//
//    // $validator = app('validator')->make($payload, $rules);
//
//    // if ($validator->fails()) {
//    //     throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new user.', $validator->errors());
//    // }
//
//    // Create user as per usual.
//}



    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
     // $value = $request->session()->get('currentCompany');
     // $value = $request->session()->get('user');

    public $currentUser;
    public $CurrentCompany;
    public $now = null;

    public function __construct(Auth $auth)
    {
        // $this->currentUser = $auth->user();//Auth $auth
         $this->CurrentCompany = $auth->user()->user()->company;
         // $this->request->get('company_id') ?: Company::current();
    }

    public function carbon()
    {
        return $this->now = new Carbon;
    }

    public function logs($e)
    {
        return Log::alert($e);
    }    

    public function getStarted($company,$key)
    {
        $getStarted = $company->getStartedByKey($key);
        if($getStarted) {
            $getStarted->done = true;
            $getStarted->save();
        }
    }

    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $code);
    }

}
