<?php

namespace App\Http\Controllers\Auth;

use App\Repository\Auth\RequestRepository;
use App\Service\TelegramService;
use App\Service\DemoData;
use App\Http\Requests\PostRegistrationFinal;
use App\Http\Controllers\Controller;
/**
 * RegistrationFinal representation.
 *
 * @Resource("Users", uri="/users")
 */
class RegistrationFinalController extends Controller
{
    protected $requestRepository;
    protected $demoService;
    protected $telegramService;
    protected $MailChimpService;


//    companyRepository
//    companyEmailRepository + channelRepository
//    CompanyContactsRepository
//    CompanyBillingRepository
//    CompanyWorkingDayRepository
//    BlackWhiteListRepository
//    IntegrationRepository
//    GetStartedRepository
//
//
//    NotificationRepository
//    NotificationUserRepository
//    TextSettingsRepository
//    MonitoringRepository
//    MailingScheduleRepository
//    userRepository
//    UserGroupRepository
//    UserGroupPermissionRepository


    function __construct(RequestRepository $requestRepository)
    {
        $this->requestRepository = $requestRepository;
        $this->MailChimpService = new MailChimpService;
        $this->phoneService = new PhoneService;
        $this->demoService = new DemoData;
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
    public function getRegistrationFinal($hash)
    {
        //get data
        $hideBack = true;

        $registrationRequest = $this->requestRepository->getRegistrationByHash($hash);
        if (!$registrationRequest || !$registrationRequest->confirmed) {
            return $this->redirect
                        ->route('auth.get_registration');
        }
        //output
        return view('auth.registration_final', [
            'hideBack'
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
    public function postRegistrationFinal(PostRegistrationFinal $request,$hash)
    {
        //get data
        $referer = $request->server('HTTP_REFERER');
        $secret_reg = false;
        if ($referer && strpos($referer, '/secretsignup') !== false) {
            $secret_reg = true;
        }

        $data =  $request->only([
            'user_email',
            'user_password', 
            'company_users_number',
            '_ga_cid'
        ]);
        $mailchimpListId = $this->config()->get('services.mailchimp.list_id');
        $mailchimpKey = $this->config()->get('services.mailchimp.secret');

        //validate
        // $this->service->getValidation('postRegistrationFinal',$referer);

        $this->telegramService->sendTelegramWithError();

        //get from db
        $registrationRequest = $this->requestRepository->getRegistrationByHash($hash);
        if (!$registrationRequest || !$registrationRequest->confirmed) {
            return $this->redirect
                        ->route('auth.get_registration');
        }
         try {
            //update request
            $this->requestRepository->registrationUpdate($registrationRequest,$secret_reg,$data);
            //add to mailchimp
            $this->MailChimpService->mailcimpAddList(
                 $registrationRequest->data['user_email'],
                 "subscribed", 
                 $mailchimpListId, 
                 $mailchimpKey
             );



                    //create company
                    $company = $this->companyRepository->create($registrationRequest->data['company_name']);
                    //create integration
                    $integrations = $this->IntegrationRepository->getBy($status = true,$default_status = true);
                    foreach ($integrations as $integration) {
                        $this->IntegrationRepository->createCompany($integration->id,$company->id);
                    }
                    //create contacts
                    $companyContacts = $this->CompanyContactsRepository->create($company->id);
                    //create CompanyBilling
                    $this->CompanyBillingRepository->create($company->id,$registrationRequest->data['company_users_number']);
                    //create workingdays
                    $this->CompanyWorkingDayRepository->create();
                    //create BlackWhiteList
                    $this->BlackWhiteListRepository->create();
                    //create getStarted
                    $this->GetStartedRepository->create();



             //create user
            $user = $this->userRepository->create($company->id,
                $registrationRequest->data['user_email'],
                $registrationRequest->data['user_password'],
                $registrationRequest->data['user_name'],
                $registrationRequest->data['company_phone']
            );
            //create notification
            $notifications = $this->NotificationRepository->getByStatus('true');
            foreach ($notifications as $notification) {
               $this->NotificationUserRepository->create($notification,$user->id);
            }

            //create textSettings
            $this->TextSettingsRepository->create();
            //create monitoring
            $this->MonitoringRepository->create();
            // Заполняем аккаунт демо-данными
            $this->demoService->createDemoData($company);

            $registrationRequest->delete();

            $mailingScheduleItem = $this->MailingScheduleRepository->getBy('template','0.5');
            $company->sendMailingScedule($mailingScheduleItem);

             if(!$groupId){
                $group = $this->UserGroupRepository->getBy($companyId);
                if(!$group){
                    $group = $this->UserGroupRepository->create($companyId);
                    $list = $this->UserGroupPermissionRepository->all()->lists('id');
                    $group->permissions()->sync($list);
                    $channel = $this->companyEmailRepository->getBy($companyId);
                    if($channel) {
                        $this->channelRepository->add($group->id,$channel->id);
                    }
                }
            }
            else{
                $group = $this->UserGroupRepository->getBy($companyId,$groupId);
            }
            $group->users()->attach($user->id);
            $this->userRepository->update($user->id,$group->id);
            $this->getStarted($company,GetStarted::KEY_CHANNELS);
        } 
        catch (Exception $e) {
            $this->logs($e);
            //send telegram
            $this->telegramService->SendError($registrationRequest->data);
            //output
            return $this->redirect
                        ->refresh();
        }  
        //send telegram
        $this->telegramService->SendSuccess($registrationRequest->data);
        //logic user
        $this->currentUser->login($user);
        //output
        return $this->redirect
                    ->route('auth.get_thank_you');
    }
}