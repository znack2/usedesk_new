<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

/* ================== company ================== */

	$api->get('/company', 											['uses' => 'CompanyController@index', 									'as' => 'user.company.get_index']);
	$api->post('/company/save-contacts', 							['uses' => 'CompanyController@store', 									'as' => 'user.company.post_contacts']);
	$api->delete('/company/logotype', 								['uses' => 'CompanyController@deleteLogotype', 							'as' => 'user.company.get_delete_logotype']);
	$api->delete('/demo-data', 										['uses' => 'CompanyController@deleteDemoData', 							'as' => 'user.demo_data.delete']);

/* ================== agents ================== */

	$api->get('/company/users', 											['uses' => 'UsersController@index', 									'as' => 'user.users.get_index']);
	$api->get('/company/users/{role?}', 									['uses' => 'UsersController@show', 										'as' => 'user.users.get_create']);
	$api->post('/company/users/create/{role?}', 							['uses' => 'UsersController@store', 									'as' => 'user.users.post_create']);
	$api->put('/company/users/create/{role?}', 								['uses' => 'UsersController@update', 									'as' => 'user.users.post_create']);
	$api->delete('/company/users//{id}', 									['uses' => 'UsersController@destroy', 									'as' => 'user.users.get_delete']);

/* ================== groups ================== */

	$api->get('/company/user-groups', 										['uses' => 'UserGroupsController@index', 								'as' => 'user.user_groups.get_index']);
	$api->get('/company/user-groups/{id}', 									['uses' => 'UserGroupsController@show', 								'as' => 'user.user_groups.get_create']);
	$api->post('/company/user-groups/create', 								['uses' => 'UserGroupsController@store', 								'as' => 'user.user_groups.post_create']);
	$api->put('/company/user-groups/{id}', 									['uses' => 'UserGroupsController@update', 								'as' => 'user.user_groups.post_create']);
	$api->delete('/company/user-groups/{id}', 								['uses' => 'UserGroupsController@destroy', 								'as' => 'user.user_groups.get_delete']);
	// $api->get('/user-groups/permissions/{id}.json', 				['uses' => 'UserGroupsController@getPermissionsAjax', 					'as' => 'user.user_groups.get_permissions_ajax']);

/* ================== Billings ================== */

	if (!Config::get('app.disable_billing')) {
	    $api->get('/company/billing/invoices', 								['uses' => 'BillingController@getInvoices', 					'as' => 'user.billing.get_invoices']);
	    $api->get('/company/billing/invoices/{id}.partial',					['uses' => 'BillingController@getInvoiceDetailsPartial', 		'as' => 'user.billing.get_invoice_details_partial']);
	}					
	$api->post('/company/billing/pay-online', 								['uses' => 'BillingController@postPayOnline', 					'as' => 'user.billing.post_pay_online']);
	$api->post('/company/billing/confirm', 									['uses' => 'BillingController@postConfirm', 					'as' => 'user.billing.post_confirm']);
	$api->get('/company/billing/download-form/{id}', 						['uses' => 'BillingController@getDownloadForm', 				'as' => 'user.billing.get_download_form']);
	$api->get('/company/billing/unlink-card', 								['uses' => 'BillingController@getUnlinkCard', 					'as' => 'user.billing.get_unlink_card']);
	$api->get('/company/billing/settings', 									['uses' => 'BillingController@getSettings', 					'as' => 'user.billing.get_settings']);
	$api->post('/company/billing/settings', 								['uses' => 'BillingController@postSettings', 					'as' => 'user.billing.post_settings']);


/* ================== working days ================== */

	$api->get('/company/working-days', 								['uses' => 'CompanyController@show', 									'as' => 'user.company.get_working_days']);
	$api->post('/company/save-working-days', 						['uses' => 'CompanyController@store', 									'as' => 'user.company.post_working_days']);


});
