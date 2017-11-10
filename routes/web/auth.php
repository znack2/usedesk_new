<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
		
//	$api->view('/login', 'user.auth.login');
//	$api->view('/thank-you', 'user.auth.thank_you');
//	$api->view('/secretsignup', 'user.auth.secret_registration');
//	$api->view('/password-restore', 'user.auth.password_restore');

    $api->get('/login', 							['uses' => 'LoginController@getLogin', 									'as' => 'user.auth.get_login']);
    $api->get('/secretsignup', 						['uses' => 'RegistrationController@getSecretRegistration', 				'as' => 'user.auth.get_secret_registration']);
    $api->get('/password-restore', 					['uses' => 'PasswordController@getPasswordRestore', 					'as' => 'user.auth.get_password_restore']);
    $api->get('/thank-you', 						['uses' => 'LoginController@getThankYou', 								'as' => 'user.auth.get_thank_you']);


	$api->post('/login', 							['uses' => 'LoginController@postLogin', 								'as' => 'user.auth.post_login']);
	$api->get('/redirect-by-hash/{hash}', 			['uses' => 'LoginController@redirectByHash', 							'as' => 'user.auth.get_redirect_by_hash']);
	$api->get('/login-token',          				['uses' => 'LoginController@getLoginToken', 							'as' => 'user.auth.get_login_token']);
	$api->get('/logout', 							['uses' => 'LoginController@getLogout', 								'as' => 'user.auth.get_logout']);


	$api->get('/signup', 							['uses' => 'RegistrationController@getRegistration', 					'as' => 'user.auth.get_registration']);
	$api->post('/signup', 							['uses' => 'RegistrationController@postRegistration', 					'as' => 'user.auth.post_registration']);
	$api->get('/signup-confirmation/{hash}', 		['uses' => 'RegistrationController@getRegistrationConfirmation', 		'as' => 'user.auth.get_registration_confirmation']);
	$api->post('/signup-confirmation/{hash}', 		['uses' => 'RegistrationController@postRegistrationConfirmation',		'as' => 'user.auth.post_registration_confirmation']);
	$api->get('/signup/{hash}', 					['uses' => 'RegistrationController@getRegistrationFinal', 				'as' => 'user.auth.get_registration_final']);
	$api->post('/signup/{hash}', 					['uses' => 'RegistrationController@postRegistrationFinal', 				'as' => 'user.auth.post_registration_final']);
	$api->post('/secretsignup/{hash}', 				['uses' => 'RegistrationController@postRegistrationFinal', 				'as' => 'user.auth.post_secret_registration_final']);
	$api->get('/verifyemail/{confirmationCode}', 	['uses' => 'RegistrationController@verifyemail', 						'as' => 'user.auth.get_verifyemail']);


	$api->post('/secretsignup', 					['uses' => 'RegistrationController@postSecretRegistration', 			'as' => 'user.auth.post_secret_registration']);
	$api->get('/secretsignup/{hash}', 				['uses' => 'RegistrationController@getSecretRegistrationFinal', 		'as' => 'user.auth.get_secret_registration_final']);


	$api->post('/password-restore', 				['uses' => 'PasswordController@postPasswordRestore', 					'as' => 'user.auth.post_password_restore']);
	$api->get('/password-restore/{hash}', 			['uses' => 'PasswordController@getPasswordRestoreNew', 					'as' => 'user.auth.get_password_restore_new']);
	$api->post('/password-restore/{hash}', 			['uses' => 'PasswordController@postPasswordRestoreNew', 				'as' => 'user.auth.post_password_restore_new']);

});





