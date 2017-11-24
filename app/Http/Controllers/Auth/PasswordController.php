<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Foundation\Auth\ResetsPasswords;

use App\Repository\Auth\RequestRepository;
use App\Service\Mailer;
use App\Http\Requests\postPasswordRestore;
use App\Http\Requests\postPasswordRestoreNew;
use App\Http\Controllers\BaseController;

/**
 * User resource representation.
 *
 * @Resource("Users", uri="/users")
 */
class PasswordController extends BaseController
{
    use SendsPasswordResetEmails;
    use ResetsPasswords;

    /**
     * Where to redirect()->route users after resetting their password.
     *
     * @var string
     */
    protected redirect()->routeTo = '/home';

    protected $requestRepository;
    protected $mailer;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(RequestRepository $requestRepository)
    {
        $this->middleware('guest');
        $this->requestRepository = $requestRepository;
        $this->mailer = new Mailer;
    }
    /**
     * Show password_restore page
     *
     * Get a JSON representation of all the registered users.
     *
     * @Get("/{?page,limit}")
     * @Versions({"v1"})
     */
    public function getPasswordRestore()
    {
        //output
        return view('user.auth.password_restore');
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
    public function postPasswordRestore(postPasswordRestore $request)
    {
        //get data
        $email = $request->input('email');
        
        //get from db
        $request = $this->requestRepository->passwordRestoreByEmail($email);
        $name = 'user.emails.password_restore';
        $data = ['request' => $request];
        $subject = trans('text.password_recovery');
        //send mail
        $this->mailer->send($name,$data,$request,$subject);
        //output
        return $this->redirect
                    ->back()
                    ->with('message_success', trans('text.password_recovery_mess'));
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
    public function getPasswordRestoreNew($hash)
    {
        $this->PasswordRestoreRequestRepository->getByHash($hash);
        //output
        return $this->view
                    ->make('user.auth.password_restore_new');
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
    public function postPasswordRestoreNew($hash)
    {
        //get from db
        $request = $this->requestRepository->getPasswordRestore($hash);
        $request->delete();
        //
        $user = $this->userRepository->ByEmail($request->email);
        $user->password = $this->makeOrCheckHash();
        $user->save();
        //output
        return $this->redirect
                    ->route('user.auth.get_login');
    }
}