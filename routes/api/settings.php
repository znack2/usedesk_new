<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

/* ================== nps ================== */

	$api->get('/nps', 												['uses' => 'OtherController@show', 										'as' => 'user.nps.settings']);
	$api->post('/nps/saveSettings',									['uses' => 'OtherController@saveNpsSettings', 							'as' => 'user.nps.saveSettings']);
	$api->get('/nps/{client}/{ticket}',								['uses' => 'NpsController@nps', 										'as' => 'user.nps']);
	$api->post('/nps/rating', 										['uses' => 'NpsController@saveNpsRating', 								'as' => 'user.nps.rating']);
	$api->get('/nps/default', 										['uses' => 'NpsController@defaultNps', 									'as' => 'user.nps.default']);

/* ================== additional field ================== */

	$api->get('/additional-fields', 								['uses' => 'AdditionalFieldsController@index', 							'as' => 'user.additional_fields.get_index']);
	$api->get('/additional-fields/{id}', 							['uses' => 'AdditionalFieldsController@show', 							'as' => 'user.additional_fields.get_index']);
	$api->post('/additional-fields/tickets/{type}', 				['uses' => 'AdditionalFieldsController@store', 							'as' => 'user.additional_fields.tickets.get_edit']);
	$api->put('/additional-fields/tickets', 						['uses' => 'AdditionalFieldsController@update', 						'as' => 'user.additional_fields.tickets.post_edit']);
	$api->delete('/additional-fields/tickets/{id}', 				['uses' => 'AdditionalFieldsController@destroy', 						'as' => 'user.additional_fields.tickets.get_delete']);
	$api->post('/additional-fields/tickets/enable',   				['uses' => 'AdditionalFieldsController@enable', 						'as' => 'user.additional_fields.tickets.get_enable']);
	$api->post('/additional-fields/tickets/disable', 				['uses' => 'AdditionalFieldsController@disable', 						'as' => 'user.additional_fields.tickets.get_disable']);

	$api->post('/additional-fields/tickets/search',   				['uses' => 'AdditionalFieldsController@searchByTextField', 				'as' => 'user.additional_fields.tickets.get_search']);

/* ================== ai ================== */

	$api->get('/ai', 												['uses' => 'OtherController@show', 										'as' => 'user.ai.settings']);
	$api->post('/ai', 												['uses' => 'OtherController@store', 									'as' => 'user.ai.edit.settings']);

/* ================== sla ================== */

	$api->get('/sla', 												['uses' => 'OtherController@show', 										'as' => 'user.sla.get_index']);
	$api->post('/sla/save/',  										['uses' => 'OtherController@store', 									'as' => 'user.sla.post_save']);

/* ================== text ================== */

	$api->get('/company/text-settings', 							['uses' => 'OtherController@show', 										'as' => 'user.text_settings.get_index']);
	$api->post('/company/text-settings/save', 						['uses' => 'OtherController@store', 									'as' => 'user.text_settings.post_save']);

/* ================== session ================== */

	//what is this? 
	$api->post('/company/option/save-to-session',          			['uses' => 'OtherController@store', 									'as' => 'user.option.save']); 


/* ================== integration ================== */

	$api->get('/settings/integration', 								['uses' => 'IntegrationController@show', 								'as' => 'user.integration.get_index']);
	$api->post('/settings/integration/change-status', 				['uses' => 'IntegrationController@store',								'as' => 'user.integration.post_change_status']);

/* ================== get started ================== */

	$api->get('/get-started',        								['uses' => 'GetStartedController@index', 								'as' => 'user.get_started.get_index']);
	$api->get('/get-started/close',  								['uses' => 'GetStartedController@getClose', 							'as' => 'user.get_started.close']);

	
/* ================== black and White list ================== */

	$api->get('/company/black-white-list', 							['uses' => 'OtherController@show', 										'as' => 'user.black_white_list.get_index']);
	$api->post('/company/black-white-list/save', 					['uses' => 'OtherController@store', 									'as' => 'user.black_white_list.post_save']);
});
