<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('/delivery-list', 				['uses' => 'DeliveryListController@getIndex', 		'as' => 'admin.delivery_list.get_index']);
	$api->get('/delivery-list/delete/{id}', 	['uses' => 'DeliveryListController@getDelete', 		'as' => 'admin.delivery_list.get_delete']);
	$api->post('/delivery-list/create', 		['uses' => 'DeliveryListController@postCreate', 	'as' => 'admin.delivery_list.post_create']);
		
	$api->get('/integration',					['uses' => 'IntegrationController@getIndex', 		'as' => 'admin.integration.get_index']);
	$api->get('/integration/create',			['uses' => 'IntegrationController@getEdit', 		'as' => 'admin.integration.get_create']);
	$api->post('/integration/create',			['uses' => 'IntegrationController@postEdit', 		'as' => 'admin.integration.post_create']);
	$api->get('/integration/edit/{id}',			['uses' => 'IntegrationController@getEdit', 		'as' => 'admin.integration.get_edit']);
	$api->post('/integration/edit/{id}',		['uses' => 'IntegrationController@postEdit', 		'as' => 'admin.integration.post_edit']);
	$api->get('/integration/delete/{id}',		['uses' => 'IntegrationController@getDelete', 		'as' => 'admin.integration.get_delete']);

	$api->get('/mailing-schedule', 				['uses' => 'MailingScheduleController@getIndex', 	'as' => 'admin.mailing_schedule.get_index']);
	$api->get('/mailing-schedule/create', 		['uses' => 'MailingScheduleController@getEdit', 	'as' => 'admin.mailing_schedule.get_create']);
	$api->get('/mailing-schedule/edit/{id}', 	['uses' => 'MailingScheduleController@getEdit', 	'as' => 'admin.mailing_schedule.get_edit']);
	$api->post('/mailing-schedule/create', 		['uses' => 'MailingScheduleController@postEdit', 	'as' => 'admin.mailing_schedule.post_create']);
	$api->post('/mailing-schedule/edit/{id}', 	['uses' => 'MailingScheduleController@postEdit', 	'as' => 'admin.mailing_schedule.post_edit']);
	$api->get('/mailing-schedule/delete/{id}',  ['uses' => 'MailingScheduleController@getDelete', 	'as' => 'admin.mailing_schedule.get_delete']);

	$api->get('/regexp-helpers', 				['uses' => 'RegexpHelpersController@getIndex', 		'as' => 'admin.regexp_helpers.get_index']);
	$api->get('/regexp-helpers/create', 		['uses' => 'RegexpHelpersController@getEdit', 		'as' => 'admin.regexp_helpers.get_create']);
	$api->get('/regexp-helpers/edit/{id}', 		['uses' => 'RegexpHelpersController@getEdit', 		'as' => 'admin.regexp_helpers.get_edit']);
	$api->post('/regexp-helpers/create', 		['uses' => 'RegexpHelpersController@postEdit', 		'as' => 'admin.regexp_helpers.post_create']);
	$api->post('/regexp-helpers/edit/{id}', 	['uses' => 'RegexpHelpersController@postEdit', 		'as' => 'admin.regexp_helpers.post_edit']);
	$api->get('/regexp-helpers/delete/{id}', 	['uses' => 'RegexpHelpersController@getDelete', 	'as' => 'admin.regexp_helpers.get_delete']);
		
	$api->get('/localization', 					['uses' => 'LocalizationController@getIndex', 		'as' => 'admin.localization.get_index']);
	$api->get('/settings-log', 					['uses' => 'LogController@getIndex', 				'as' => 'admin.logs.get_index']);
		
	$api->get('/config',       					['uses' => 'ConfigController@getIndex', 			'as' => 'admin.config.get_index']);
	$api->post('/config/save',  				['uses' => 'ConfigController@postSave', 			'as' => 'admin.config.post_save']);

	$api->get('/ticket-statuses', 				['uses' => 'TicketStatusesController@getIndex', 	'as' => 'admin.ticket_statuses.get_index']);
	$api->get('/ticket-statuses/create', 		['uses' => 'TicketStatusesController@getEdit', 		'as' => 'admin.ticket_statuses.get_create']);
	$api->get('/ticket-statuses/edit/{id}', 	['uses' => 'TicketStatusesController@getEdit', 		'as' => 'admin.ticket_statuses.get_edit']);
	$api->post('/ticket-statuses/create', 		['uses' => 'TicketStatusesController@postEdit', 	'as' => 'admin.ticket_statuses.post_create']);
	$api->post('/ticket-statuses/edit/{id}', 	['uses' => 'TicketStatusesController@postEdit', 	'as' => 'admin.ticket_statuses.post_edit']);
	$api->get('/ticket-statuses/delete/{id}', 	['uses' => 'TicketStatusesController@getDelete', 	'as' => 'admin.ticket_statuses.get_delete']);

	$api->get('/ticket-variables', 				['uses' => 'TicketVariablesController@getIndex', 	'as' => 'admin.ticket_variables.get_index']);
	$api->get('/ticket-variables/edit/{id}', 	['uses' => 'TicketVariablesController@getEdit', 	'as' => 'admin.ticket_variables.get_edit']);
	$api->post('/ticket-variables/edit/{id}', 	['uses' => 'TicketVariablesController@postEdit', 	'as' => 'admin.ticket_variables.post_edit']);
});

