<?php

namespace App\Http\Controllers\Auth;

//use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
//use Illuminate\Foundation\Auth\ResetsPasswords;

use App\Repository\RequestRepository;
use App\Repository\UserRepository;
use App\Service\Mailer;
use App\Http\Requests\postPasswordRestore;
use App\Http\Requests\postPasswordRestoreNew;
use App\Http\Controllers\Controller;

/**
 * Password representation.
 *
 * @Resource("Users", uri="/users")
 */
class PasswordController extends Controller
{
//    use SendsPasswordResetEmails;
//    use ResetsPasswords;

    protected $requestRepository;
    protected $userRepository;
    protected $mailer;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(RequestRepository $requestRepository,UserRepository $userRepository)
    {
        $this->middleware('guest');
        $this->requestRepository = $requestRepository;
        $this->userRepository = $userRepository;
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
        return view('auth.password_restore');
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
        $hash = md5(uniqid(time()));
        
        //get from db
        $request = $this->requestRepository->passwordUpdate($email,$hash);

        $name = 'emails.password_restore';
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
        $this->requestRepository->getPasswordByHash($hash);
        //output
        return $this->view
                    ->make('auth.password_restore_new');
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
        //get data
        $input = $request->input('password');
        $password = Hash::make($input);
        //get from db
        $request = $this->requestRepository->getPasswordByHash($hash);
        $request->delete();
        //
        $this->userRepository->setPassword($request->email,$password);
        //output
        return $this->redirect
                    ->route('auth.get_login');
    }
}