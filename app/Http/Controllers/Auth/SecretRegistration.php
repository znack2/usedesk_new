<?php

namespace App\Http\Controllers\Auth;

use App\Repository\RequestRepository;
use App\Http\Requests\Auth\postSecretRegistration;
use App\Http\Controllers\Controller;
/**
 * Secret Registration representation.
 *
 * @Resource("Users", uri="/users")
 */
class SecretController extends Controller
{
    protected $requestRepository;

    function __construct(RequestRepository $requestRepository)
    {
        $this->requestRepository = $requestRepository;
    }
/**
     * Show all users
     *
     * Get a JSON representation of all the registered users.
     *
     * @Get("/{?page,limit}")
     * @Versions({"v1"})
     */
 	public function getSecretRegistration()
    {
        return view('auth.secret_registration');
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
    public function postSecretRegistration(postSecretRegistration $request)
    {
        try {
            //create request
            $registrationRequest = $this->requestRepository->createRegistration($request);
            //set session
            $this->session->set('__registration_request_id', $registrationRequest->id);
            $var = md5($registrationRequest->id . 'SALT1313');
            //output
            return $this->redirect
                        ->route('auth.get_secret_registration_final', [$var]);
        } catch (Exception $e) {
            $this->logs($e);
            return $this->redirect
                        ->refresh();
        }
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
    public function getSecretRegistrationFinal($hash)
    {
        //get data
        $hideBack = true;

        $registrationRequest = $this->requestRepository->getRegistrationByHash($hash);
        if (!$registrationRequest || !$registrationRequest->confirmed) {
            return $this->redirect
                        ->route('auth.get_secret_registration');
        }
        //output
        return view('auth.secret_registration_final', [
            'hideBack'
        ]);
    }
}