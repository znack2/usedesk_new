<?php

namespace App\Http\Controllers\Auth;

use App\Repository\Auth\RequestRepository;
use App\Service\TelegramService;
use App\Service\DemoData'
use App\Http\Requests\postRegistrationConfirmation;
/**
 * User resource representation.
 *
 * @Resource("Users", uri="/users")
 */
class RegistrationFinalController extends BaseController
{
    protected $requestRepository;
    protected $demoService;
    protected $telegramService;

    function __construct(RequestRepository $requestRepository)
    {
        $this->requestRepository = $requestRepository;
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
        $registrationRequest = $this->requestRepository->getByHash($hash);
        if (!$registrationRequest || !$registrationRequest->confirmed) {
            return $this->redirect
                        ->route('user.auth.get_registration');
        }
        $hideBack = true;
        //output
        return view('user.auth.registration_final', [
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
    public function postRegistrationFinal($hash)
    {
        //get data
        $referer = $request->server('HTTP_REFERER');


        $data =  $request->only([
            'user_email',
            'user_password', 
            'company_users_number',
            '_ga_cid'
        ]);

        //validate
        $this->service->getValidation('postRegistrationFinal',$referer);

        $this->telegramService->sendTelegramwithError();

        //get from db
        $registrationRequest = $this->requestRepository->getByHash($hash);
        if (!$registrationRequest || !$registrationRequest->confirmed) {
            return $this->redirect
                        ->route('user.auth.get_registration');
        }
         try {
            //update request
            $registrationRequest->data = $registrationRequest->data + $data['user_password','company_users_number'];
            if (!$secret_reg) {
                $registrationRequest->data = $registrationRequest->data + $data['email'];
            }
            $registrationRequest->save();
            //add to mailchimp
            $mailchimpListId = $this->config()->get('services.mailchimp.list_id');
            $mailchimpKey = $this->config()->get('services.mailchimp.secret');
            $this->userRepository->mailcimpAddList($registrationRequest->data['user_email'], "subscribed", $mailchimpListId, $mailchimpKey);
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
             //create user
            $this->userRepository->create($company->id,$registrationRequest->data[
                'user_email',
                'user_password',
                'user_name',
                'company_phone'
            ]);
            //create notification
            $notifications = $this->NotificationRepository->getByStatus('true');
            foreach ($notifications as $notification) {
               $this->NotificationUserRepository->create($notification,$user->id);
            }
            //create workingdays
            $this->CompanyWorkingDayRepository->create();
            //create getSterted
            $this->GetStartedRepository->create();
            //create textSettings
            $this->TextSettingsRepository->create();
            //create monitoring
            $this->MonitoringRepository->create();
            //create bandw
            $this->BlackWhiteListRepository->create();
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

            $getStarted = $company->getStartedByKey(GetStarted::KEY_CHANNELS);
            if($getStarted) {
                $getStarted->done = true;
                $getStarted->save();
            }
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
                    ->route('user.auth.get_thank_you');
    }
}