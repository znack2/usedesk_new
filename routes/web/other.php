<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->any('/uapi/ok', 												['uses' => 'WebhookController@index']);
	$api->any('/uapi/response', 										['uses' => 'GapiController@apiResponse', 			'as' => 'user.telephony']);
	$api->any('/uapi/test', 											['uses' => 'otherController@apiTest', 				'as' => 'user.api.manual']);
	$api->post('/user/chat/setStatus', 									['uses' => 'UsersController@setChatUserStatus',		'as' => 'user.set.status']);
	$api->post('/upload-image',  										['uses' => 'GapiController@postUploadImage',  		'as' => 'user.gapi.post_upload_image']);
	$api->post('/voice-to-text', 										['uses' => 'GapiController@postVoiceToText',  		'as' => 'user.gapi.post_voice_to_text']);

	// $api->any('/back-3ds',       										['uses' => 'web/GapiController@postBack3ds', 		'as' => 'user.gapi.post_back_3ds']);


	// $api->get('/settings/monitoring', 									['uses' => 'web/MonitoringController@getSettings', 		'as' => 'user.smonitoring.get_settings']);
	// $api->post('/settings/monitoring', 								['uses' => 'web/MonitoringController@postSettings', 	'as' => 'user.smonitoring.post_settings']);
	// $api->post('/settings/monitoring/deleteClass/{id}', 				['uses' => 'web/MonitoringController@postDeleteClass', 	'as' => 'user.smonitoring.post_delete_class']);
	// $api->post('/settings/monitoring/deleteWord/{id}', 				['uses' => 'web/MonitoringController@postDeleteKeyword','as' => 'user.smonitoring.postDeleteKeyword']);
	// $api->get('/monitoring/clear', 									['uses' => 'web/MonitoringController@clear', 			'as' => 'user.monitoring.clear']);
	// $api->get('/monitoring/{type?}', 									['uses' => 'web/MonitoringController@getIndex', 		'as' => 'user.monitoring.get_index']);
	// $api->post('/monitoring/process', 									['uses' => 'web/MonitoringController@process', 			'as' => 'user.monitoring.process']);



	// if (!Config::get('app.disable_billing')) {
	//     $api->get('/billing/invoices', 								['uses' => 'web/permission/BillingController@getInvoices', 					'as' => 'user.billing.get_invoices']);
	//     $api->get('/billing/invoices/{id}.partial',					['uses' => 'web/permission/BillingController@getInvoiceDetailsPartial', 	'as' => 'user.billing.get_invoice_details_partial']);
	// }					
	// $api->post('/billing/pay-online', 									['uses' => 'web/permission/BillingController@postPayOnline', 					'as' => 'user.billing.post_pay_online']);
	// $api->post('/billing/confirm', 									['uses' => 'web/permission/BillingController@postConfirm', 						'as' => 'user.billing.post_confirm']);
	// $api->get('/billing/download-form/{id}', 							['uses' => 'web/permission/BillingController@getDownloadForm', 					'as' => 'user.billing.get_download_form']);
	// $api->get('/billing/unlink-card', 									['uses' => 'web/permission/BillingController@getUnlinkCard', 					'as' => 'user.billing.get_unlink_card']);
	// $api->get('/billing/settings', 									['uses' => 'web/settings/OtherSettignsController@getSettings', 				'as' => 'user.billing.get_settings']);
	// $api->post('/billing/settings', 									['uses' => 'web/settings/OtherSettignsController@postSettings', 			'as' => 'user.billing.post_settings'])
});
