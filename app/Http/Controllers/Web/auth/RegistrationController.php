<?php

use App\Repository\RequestRepository;
use App\Service\Sms;
use App\Service\PhoneService;
use App\Http\Requests\postRegistrationConfirmation;
/**
 * User resource representation.
 *
 * @Resource("Users", uri="/users")
 */
class RegistrationController extends BaseController
{
    protected $requestRepository;
    protected $smsService;
    protected $phoneService;

    function __construct(RequestRepository $requestRepository)
    {
        $this->requestRepository = $requestRepository;
        $this->smsService = new Sms;
        $this->phoneService = new PhoneService;
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
        return view('user.auth.registration');
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
        $data =  $request->only(['company_phone','company_name', 'user_email' ,'user_name']);
        //check phone
        if($data['input_phone'] != ""){
            $inputPhoneNumber = $this->phoneService->toDbFormat($data['input_phone']);
            $phone_exists = $this->CompanyContactsRepository->check($data['input_phone']);
        }
        //check status
        $sms_confirmation_status = $this->ConfigModelRepository->confirmationStatus();
        //send SMS
        if ($sms_confirmation_status == 1) {
            $smsConfirmation = $this->OtherRepository->createSmsConfirmation($data['input_phone']);
            $message = $this->lang()->trans('text._sms.registration_code', ['code' => $smsConfirmation->code])
            $address= $smsConfirmation->to;
            $this->smsService->send($address, $message);
        }
        //create request
        try {
            $sms_confirmation_id = $sms_confirmation_status == 1 
                ? $smsConfirmation->id 
                : NULL
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
            ? 'user.auth.get_registration_confirmation' 
            : 'user.auth.get_registration_final';
            //output
        return $this->redirect
                    ->route($route, [$hash]);
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
    public function getRegistrationConfirmation($hash)
    {
        $registrationRequest = $this->requestRepository->getByHash($hash);
        if (!$registrationRequest) {
            return $this->redirect
                        ->route('user.auth.get_registration');
        }
        $hideBack = true;
        //output
        return view('user.auth.registration_confirmation', [
            'hideBack'
            'hash'
        ]);
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
    public function postRegistrationConfirmation(postRegistrationConfirmation $request,$hash)
    {
        //get data
        $code = $request->input('code');
        //update from db
        $registrationRequest = $this->requestRepository->confirm($hash);
        if (!$registrationRequest) {
            return $this->redirect
                        ->route('user.auth.get_registration');
        }
        //set session
        $this->session->set('__registration_request_id', $registrationRequest->id);
        //output
        return $this->redirect
                    ->route('user.auth.get_registration_final', ['hash' => $hash]);
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
    public function verifyemail($confirmation_code)
    {
        //check user already confirm
        if(isset($this->currentUser->confirmed) ) {
            $data = ['name' => $this->currentUser->name, 'message' => trans('text.email_alr_confirmed') ];
        }
        //check code 
        elseif( ! $confirmation_code) {
            $data = ['message' => trans('text.email_not_confirmed_no_act_code') ];
        }
        //confirm user in db
        $user = $this->userRepository->confirm($confirmation_code);
        elseif($user) {
            $data = ['name' => $user->name, 'message' => trans('text.email_confirmed') ];
        }
        //ont user not code
        else { 
            $data = ['message' => trans('text.email_not_confirmed_usr_not_found') ];
        }
        //output
        return $this->view
                    ->make('user.auth.verifyemail', $data);
    }
}