<?php



Route::prefix('api')->group(function () {
		
//	Route::view('/login', 'user.auth.login');
//	$api->view('/thank-you', 'user.auth.thank_you');
//	$api->view('/secretsignup', 'user.auth.secret_registration');
//	$api->view('/password-restore', 'user.auth.password_restore');

//    $api->get('/login', 							['uses' => 'Auth\LoginController@getLogin', 									'as' => 'user.auth.get_login']);
//    $api->get('/secretsignup', 						['uses' => 'Auth\RegistrationController@getSecretRegistration', 				'as' => 'user.auth.get_secret_registration']);
//    $api->get('/password-restore', 					['uses' => 'Auth\PasswordController@getPasswordRestore', 					'as' => 'user.auth.get_password_restore']);
//    $api->get('/thank-you', 						['uses' => 'Auth\LoginController@getThankYou', 								'as' => 'user.auth.get_thank_you']);

	Route::post('/login', 							['uses' => 'Auth\LoginController@postLogin', 								'as' => 'user.auth.post_login']);
	Route::get('/redirect-by-hash/{hash}', 			['uses' => 'Auth\LoginController@redirectByHash', 							'as' => 'user.auth.get_redirect_by_hash']);
	Route::get('/login-token',          			['uses' => 'Auth\LoginController@getLoginToken', 							'as' => 'user.auth.get_login_token']);
	Route::get('/logout', 							['uses' => 'Auth\LoginController@getLogout', 								'as' => 'user.auth.get_logout']);

	Route::get('/signup', 							['uses' => 'Auth\RegistrationController@getRegistration', 					'as' => 'user.auth.get_registration']);
	Route::post('/signup', 							['uses' => 'Auth\RegistrationController@postRegistration', 					'as' => 'user.auth.post_registration']);
	Route::get('/signup-confirmation/{hash}', 		['uses' => 'Auth\RegistrationController@getRegistrationConfirmation', 		'as' => 'user.auth.get_registration_confirmation']);
	Route::post('/signup-confirmation/{hash}', 		['uses' => 'Auth\RegistrationController@postRegistrationConfirmation',		'as' => 'user.auth.post_registration_confirmation']);
	Route::get('/verifyemail/{confirmationCode}', 	['uses' => 'Auth\RegistrationController@verifyemail', 						'as' => 'user.auth.get_verifyemail']);

	Route::get('/signup/{hash}', 					['uses' => 'Auth\RegistrationController@getRegistrationFinal', 				'as' => 'user.auth.get_registration_final']);
	Route::post('/signup/{hash}', 					['uses' => 'Auth\RegistrationController@postRegistrationFinal', 			'as' => 'user.auth.post_registration_final']);
	Route::post('/secretsignup/{hash}', 			['uses' => 'Auth\RegistrationController@postRegistrationFinal', 			'as' => 'user.auth.post_secret_registration_final']);


	Route::post('/secretsignup', 					['uses' => 'Auth\RegistrationController@postSecretRegistration', 			'as' => 'user.auth.post_secret_registration']);
	Route::get('/secretsignup/{hash}', 				['uses' => 'Auth\RegistrationController@getSecretRegistrationFinal', 		'as' => 'user.auth.get_secret_registration_final']);


	Route::post('/password-restore', 				['uses' => 'Auth\PasswordController@postPasswordRestore', 					'as' => 'user.auth.post_password_restore']);
	Route::get('/password-restore/{hash}', 			['uses' => 'Auth\PasswordController@getPasswordRestoreNew', 				'as' => 'user.auth.get_password_restore_new']);
	Route::post('/password-restore/{hash}', 		['uses' => 'Auth\PasswordController@postPasswordRestoreNew', 				'as' => 'user.auth.post_password_restore_new']);

    /* ================== profile ================== */

	Route::post('/profile/save', ['before' => 'csrf',	'uses' =>  'Auth\ProfileController@postSave', 							'as' => 'user.profile.post_save']);
	Route::get('/profile', 								['uses' => 'Auth\ProfileController@getIndex', 							'as' => 'user.profile.get_index']);
	Route::delete('/profile/delete-avatar', 			['uses' => 'Auth\ProfileController@deleteAvatar', 						'as' => 'user.profile.get_delete_avatar']);
	Route::post('/profile/save-notification', 			['uses' => 'Auth\ProfileController@postSaveNotification', 				'as' => 'user.profile.post_save_notification']);

});





