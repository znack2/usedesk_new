<?php

namespace App\Http\Controllers\Auth;

use App\Repository\RequestRepository;
use App\Repository\Company\ContactsRepository;
use App\Service\Sms;
use App\Helper\PhoneHelper;
use App\Http\Requests\postRegistrationConfirmation;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
/**
 * Registration representation.
 *
 * @Resource("Users", uri="/users")
 */
class RegistrationController extends Controller
{
    use RegistersUsers;

    protected $requestRepository;
    protected $contactsRepository;
    protected $smsService;
    protected $phoneService;

    function __construct(RequestRepository $requestRepository,ContactsRepository $contactsRepository)
    {
        $this->middleware('guest');
        $this->requestRepository = $requestRepository;
        $this->contactsRepository = $contactsRepository;
        $this->smsService = new Sms;
        $this->phoneHelper = new PhoneHelper;
    }
    /**
     * Show all users
     *
     * Get a JSON representation of all the registered users.
     *
     * @Get("/{?page,limit}")
     * @Versions({"v1"})
     * @Parameters({
     *      @Parameter("page", description="The page of results to view.", default=1),
     * })
     */
    public function redirectByHash($hash) 
    {
        $registrationRequest = $this->requestRepository->getRegistrationByHash($hash);
        if (!$registrationRequest) {
            //output
            return $this->redirect
                        ->route('auth.get_registration');
        } else {
            $input = [
                'company_name' =>  $registrationRequest->data['company_name'],
                'user_name' =>  $registrationRequest->data['user_name'],
            ];
            //output
            return $this->redirect
                        ->route('auth.get_registration')
                        ->withInput($input);
        }
    }  
    /**
     * Show registration page
     *
     * Get a JSON representation of all the registered users.
     *
     * @Get("/{?page,limit}")
     * @Versions({"v1"})
     */
    public function getRegistration()
    {
        //output
        return view('auth.registration');
    }
    /**
     * Show all users
     *
     * Get a JSON representation of all the registered users.
     *
     * @Get("/{?page,limit}")
     * @Versions({"v1"})
     * @Parameters({
     *      @Parameter("page", description="The page of results to view.", default=1),
     *      @Parameter("limit", description="The amount of results per page.", default=10)
     * })
     */
    public function postRegistration(postRegistration $request)
    {       
        //get data
        $data =  $request->only(['company_phone','company_name', 'user_email' ,'user_name','input_phone']);
        //check phone
        if($data['input_phone'] != ""){
            $inputPhoneNumber = $this->phoneService->toDbFormat($data['input_phone']);
            $phone_exists = $this->contactsRepository->check($data['input_phone']);
        }
        //check status
        $sms_confirmation_status = $this->ConfigModelRepository->confirmationStatus();
        //send SMS
        if ($sms_confirmation_status == 1) {
            $smsConfirmation = $this->OtherRepository->createSmsConfirmation($data['input_phone']);
            $message = $this->lang()->trans('text._sms.registration_code', ['code' => $smsConfirmation->code]);
            $address= $smsConfirmation->to;
            $this->smsService->send($address, $message);
        }
        //create request
        try {
            $sms_confirmation_id = $sms_confirmation_status == 1 
                ? $smsConfirmation->id 
                : NULL;
            $confirmation = ($sms_confirmation_status == 1);
            $registrationRequest = $this->requestRepository->createRegistrationRequest($data,$sms_confirmation_id,$confirmation);
            $hash = md5($registrationRequest->id . 'SALT1313');
        } catch (Exception $e) {
            $this->logs($e);
            //redirect
            return $this->redirect
                        ->refresh();
        }
        //set session
        $this->session->set('__registration_request_id', $registrationRequest->id);
        //redirect

        $route = $sms_confirmation_status == 1 
            ? 'auth.get_registration_confirmation' 
            : 'auth.get_registration_final';
            //output
        return $this->redirect
                    ->route($route, [$hash]);
    }
    /**
     * Registration Confirmation view
     *
     * Get a JSON representation of all the registered users.
     *
     * @Get("/{?page,limit}")
     * @Versions({"v1"})
     * @Parameters({
     *      @Parameter("page", description="The page of results to view.", default=1),
     *      @Parameter("limit", description="The amount of results per page.", default=10)
     * })
     */
    public function getRegistrationConfirmation($hash)
    {
        //get data
        $hideBack = true;

        $registrationRequest = $this->requestRepository->getRegistrationByHash($hash);
        if (!$registrationRequest) {
            return $this->redirect
                        ->route('auth.get_registration');
        }
        //output
        return view('auth.registration_confirmation', [
            'hideBack',
            'hash'
        ]);
    }
    /**
     * Registration Confirmation
     *
     * Get a JSON representation of all the registered users.
     *
     * @Get("/{?page,limit}")
     * @Versions({"v1"})
     * @Parameters({
     *      @Parameter("page", description="The page of results to view.", default=1),
     *      @Parameter("limit", description="The amount of results per page.", default=10)
     * })
     */
    public function postRegistrationConfirmation(postRegistrationConfirmation $request,$hash)
    {
        //get data
        $code = $request->input('code');
        //update from db
        $registrationRequest = $this->requestRepository->confirmRegistration($hash);
        if (!$registrationRequest) {
            return $this->redirect
                        ->route('auth.get_registration');
        }
        //set session
        $this->session->set('__registration_request_id', $registrationRequest->id);
        //output
        return $this->redirect
                    ->route('auth.get_registration_final', ['hash' => $hash]);
    }
    /**
     * verifyemail
     *
     * Get a JSON representation of all the registered users.
     *
     * @Get("/{?page,limit}")
     * @Versions({"v1"})
     * @Parameters({
     *      @Parameter("page", description="The page of results to view.", default=1),
     *      @Parameter("limit", description="The amount of results per page.", default=10)
     * })
     */
    public function verifyemail($confirmation_code)
    {
        //get data
        $currentUser = $this->currentUser;
        $user = $this->userRepository->confirm($confirmation_code);

        //check user already confirm
        if(isset($currentUser->confirmed) ) {
            $data = ['name' => $currentUser->name, 'message' => trans('text.email_alr_confirmed') ];
        }
        //no code 
        elseif( ! $confirmation_code) {
            $data = ['message' => trans('text.email_not_confirmed_no_act_code') ];
        }
        //confirm user in db
        elseif($user) {
            $data = ['name' => $user->name, 'message' => trans('text.email_confirmed') ];
        }
        //no user no code
        else { 
            $data = ['message' => trans('text.email_not_confirmed_usr_not_found') ];
        }
        //output
        return $this->view
                    ->make('auth.verifyemail', $data);
    }
}