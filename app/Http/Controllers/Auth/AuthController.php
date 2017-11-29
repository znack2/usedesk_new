<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\BaseController;
use App\Repository\UserRepository;
/**
 * Auth representation.
 *
 * @Resource("Users", uri="/users")
 */
class AuthController extends BaseController
{
    use AuthenticatesUsers;

    /**
     * Where to redirect()->route users after login.
     *
     * @var string
     */
    protected redirect()->routeTo = '/home';

    protected $userRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(UserRepository $userRepository)
    {
        $this->middleware('guest')->except('logout');
        $this->userRepository = $userRepository;
    }
    /**
     * Show login page
     *
     * Get a JSON representation of all the registered users.
     *
     * @Get("/{?page,limit}")
     * @Versions({"v1"})
     */
    public function getLogin()
    {
        //output
        return view('auth.login');
    }
    /**
     * Show thank_you page
     *
     * Get a JSON representation of all the registered users.
     *
     * @Get("/{?page,limit}")
     * @Versions({"v1"})
     */
    public function getThankYou()
    {
        //output
        return view('auth.thank_you');
    }
    /**
     * Logout
     *
     * Get a JSON representation of all the registered users.
     *
     * @Get("/{?page,limit}")
     * @Versions({"v1"})
     */
    public function getLogout()
    {
        //get data
        $user = $this->currentUser;

        $user->logout();
        //output
        return $this->redirect
                    ->route('auth.get_login');
    }
    /**
     * Post login
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
    public function postLogin()
    {
        //get data
        $email      = $request->input('email');
        $redirect   = $request->input('redirect_to');
        $password   = $request->input('password');

        $user = $this->userRepository->ByEmail($email);

        if ($user && Hash::check($password,$user->password) && $user->company->blocked != Company::BLOCK_FULL) {
            $auth->login($user);
            $this->userRepository->setLastLoginAt($user);
            //output
            if ($redirect) {
                return $this->redirect
                            ->to($redirect);
            }
            return $this->redirect
                        ->route('dashboard.get_index');
        } else {
            return $this->redirect
                        ->route('auth.get_login', ['redirect_to' => $redirect])
                        ->withInput()
                        ->with('message_danger', $this->lang()->get('text._help.auth.invalid_email_or_password'));
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
    public function getLoginToken()
    {
        //get data
        $token = $request->input('token');
        $user  = $this->currentUser;

        $user = $this->userRepository->ByToken($token);
        if ($user) {
            $user->logout();
            $user->login($user);
            $this->userRepository->setLastLoginAt($user);
            //output
            return $this->redirect
                        ->route('dashboard.get_index');
        } else {
            return $this->redirect
                        ->route('auth.get_login');
        }
    }
 
}
