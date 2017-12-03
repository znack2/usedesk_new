<?php

Route::prefix('api')->group(function () {

/* ================== company ================== */

	Route::get('/company', 								['uses' => 'Settings\Company\CompanyController@index', 				'as' => 'user.company.get_index']);
	Route::get('/company/{id}', 						['uses' => 'Settings\Company\CompanyController@show', 				'as' => 'user.company.get_index']);
	Route::get('/company/{id}', 						['uses' => 'Settings\Company\CompanyController@show', 				'as' => 'user.company.get_index']);
	Route::delete('/company/logotype', 					['uses' => 'Settings\Company\CompanyController@deleteLogotype', 	'as' => 'user.company.get_delete_logotype']);
	Route::delete('/demo-data', 						['uses' => 'Settings\Company\CompanyController@deleteDemoData', 	'as' => 'user.demo_data.delete']);
	//get-started + text-settings
	Route::get('/company/{setting}',        			['uses' => 'Settings\Company\CompanyController@showSetting', 		'as' => 'user.get_started.get_index']);
	Route::get('/company/{setting}/toggle',  			['uses' => 'Settings\Company\CompanyController@toggleSetting', 		'as' => 'user.get_started.close']);

/* ================== agents ================== */

	Route::get('/company/users', 						['uses' => 'Settings\UserController@index', 									'as' => 'user.users.get_index']);
	Route::get('/company/users/{role?}', 				['uses' => 'Settings\UserController@show', 										'as' => 'user.users.get_create']);
	Route::post('/company/users/{role?}', 				['uses' => 'Settings\UserController@store', 									'as' => 'user.users.post_create']);
	Route::put('/company/users/{role?}', 				['uses' => 'Settings\UserController@update', 									'as' => 'user.users.post_create']);
	Route::delete('/company/users//{id}', 				['uses' => 'Settings\UserController@destroy', 									'as' => 'user.users.get_delete']);

/* ================== groups ================== */

	Route::get('/company/user-groups', 					['uses' => 'Settings\UserGroupController@index', 									'as' => 'user.user_groups.get_index']);
	Route::get('/company/user-groups/{id}', 			['uses' => 'Settings\UserGroupController@show', 									'as' => 'user.user_groups.get_create']);
	Route::post('/company/user-groups/create', 			['uses' => 'Settings\UserGroupController@store', 									'as' => 'user.user_groups.post_create']);
	Route::put('/company/user-groups/{id}', 			['uses' => 'Settings\UserGroupController@update', 									'as' => 'user.user_groups.post_create']);
	Route::delete('/company/user-groups/{id}', 			['uses' => 'Settings\UserGroupController@destroy', 									'as' => 'user.user_groups.get_delete']);
	// Route::get('/user-groups/permissions/{id}.json', 	['uses' => 'Settings\UserGroupController@getPermissionsAjax', 					'as' => 'user.user_groups.get_permissions_ajax']);

/* ================== contacts ================== */

	Route::get('/company/{id}/contacts', 				['uses' => 'Settings\Company\ContactController@show', 										'as' => 'user.company.get_contacts']);
	Route::post('/company/{id}/contacts', 				['uses' => 'Settings\Company\ContactController@store', 										'as' => 'user.company.post_contacts']);
	Route::put('/company/{id}/contacts', 				['uses' => 'Settings\Company\ContactController@update', 									'as' => 'user.company.put_contacts']);

/* ================== working days ================== */

	Route::get('/company/working-days', 				['uses' => 'Settings\Company\WorkingDayController@show', 									'as' => 'user.company.get_working_days']);
	Route::post('/company/save-working-days', 			['uses' => 'Settings\Company\WorkingDayController@store', 									'as' => 'user.company.post_working_days']);

/* ================== ai ================== */

	Route::get('/ai', 									['uses' => 'Settings\AiController@show', 									'as' => 'user.ai.settings']);
	Route::post('/ai', 									['uses' => 'Settings\AiController@store', 									'as' => 'user.ai.edit.settings']);

/* ================== sla ================== */

	Route::get('/sla', 									['uses' => 'Settings\SlaController@show', 									'as' => 'user.sla.get_index']);
	Route::post('/sla/save/',  							['uses' => 'Settings\SlaController@store', 									'as' => 'user.sla.post_save']);

/* ================== integration ================== */

	Route::get('/settings/integration', 				['uses' => 'Settings\IntegrationController@show', 								'as' => 'user.integration.get_index']);
	Route::post('/settings/integration/change-status', 	['uses' => 'Settings\IntegrationController@store',								'as' => 'user.integration.post_change_status']);
	
/* ================== black and White list ================== */

	Route::get('/company/black-white-list', 			['uses' => 'Settings\BlackWhiteListController@show', 									'as' => 'user.black_white_list.get_index']);
	Route::post('/company/black-white-list/save', 		['uses' => 'Settings\BlackWhiteListController@store', 									'as' => 'user.black_white_list.post_save']);
	
/* ================== Billings ================== */

	// if (!Config::get('app.disable_billing')) {
	//     Route::get('/company/billing/invoices', 				['uses' => 'Settings\Company\BillingController@getInvoices', 					'as' => 'user.billing.get_invoices']);
	//     Route::get('/company/billing/invoices/{id}.partial',	['uses' => 'Settings\Company\BillingController@getInvoiceDetailsPartial', 		'as' => 'user.billing.get_invoice_details_partial']);
	// }					
	// Route::post('/company/billing/pay-online', 				['uses' => 'Settings\Company\BillingController@postPayOnline', 					'as' => 'user.billing.post_pay_online']);
	// Route::post('/company/billing/confirm', 					['uses' => 'Settings\Company\BillingController@postConfirm', 					'as' => 'user.billing.post_confirm']);
	// Route::get('/company/billing/download-form/{id}', 		['uses' => 'Settings\Company\BillingController@getDownloadForm', 				'as' => 'user.billing.get_download_form']);
	// Route::get('/company/billing/unlink-card', 				['uses' => 'Settings\Company\BillingController@getUnlinkCard', 					'as' => 'user.billing.get_unlink_card']);

	// Route::get('/company/billing/settings', 					['uses' => 'Settings\Company\BillingController@getSettings', 					'as' => 'user.billing.get_settings']);
	// Route::post('/company/billing/settings', 				['uses' => 'Settings\Company\BillingController@postSettings', 					'as' => 'user.billing.post_settings']);

/* ================== nps ================== */

	// Route::get('/nps', 									['uses' => 'Settings/NpsController@show', 										'as' => 'user.nps.settings']);
	// Route::post('/nps/store',						['uses' => 'Settings/NpsController@saveNpsSettings', 							'as' => 'user.nps.saveSettings']);
	// Route::get('/nps/{client}/{ticket}',					['uses' => 'Settings/NpsController@nps', 										'as' => 'user.nps']);
	// Route::post('/nps/rating', 							['uses' => 'Settings/NpsController@saveNpsRating', 								'as' => 'user.nps.rating']);
	// Route::get('/nps/default', 							['uses' => 'Settings/NpsController@defaultNps', 									'as' => 'user.nps.default']);






/* ================== session ================== */

	//what is this? 
	// Route::post('/company/option/save-to-session',       ['uses' => 'Settings/OtherController@store', 									'as' => 'user.option.save']); 
});
