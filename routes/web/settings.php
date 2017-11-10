<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('/settings/company', 											['uses' => 'CompanyController@getIndex', 								'as' => 'user.company.get_index']);
	$api->post('/settings/company/save-contacts', 							['uses' => 'CompanyController@postContacts', 							'as' => 'user.company.post_contacts']);
	$api->get('/settings/company/delete-logotype', 							['uses' => 'CompanyController@getDeleteLogotype', 						'as' => 'user.company.get_delete_logotype']);
	$api->get('/settings/demo-data/delete', 								['uses' => 'CompanyController@deleteDemoData', 							'as' => 'user.demo_data.delete']);
	$api->get('/settings/working-days', 									['uses' => 'CompanyController@getWorkingDays', 							'as' => 'user.company.get_working_days']);
	$api->post('/settings/company/save-working-days', 						['uses' => 'CompanyController@postWorkingDays', 						'as' => 'user.company.post_working_days']);
	$api->get('/settings/users', 											['uses' => 'UsersController@getIndex', 									'as' => 'user.users.get_index']);
	$api->get('/settings/users/create/{role?}', 							['uses' => 'UsersController@getCreate', 								'as' => 'user.users.get_create']);
	$api->get('/settings/users/edit/{id}', 									['uses' => 'UsersController@getEdit', 									'as' => 'user.users.get_edit']);
	$api->post('/settings/users/create/{role?}', 							['uses' => 'UsersController@postEdit', 									'as' => 'user.users.post_create']);
	$api->get('/settings/users/delete/{id}', 								['uses' => 'UsersController@getDelete', 								'as' => 'user.users.get_delete']);
	// $api->post('/settings/users/edit/{id}', 								['uses' => 'UsersController@postEdit', 									'as' => 'user.users.post_edit'])
	$api->get('/settings/user-groups', 										['uses' => 'UserGroupsController@getIndex', 							'as' => 'user.user_groups.get_index']);
	$api->get('/settings/user-groups/create', 								['uses' => 'UserGroupsController@getEdit', 								'as' => 'user.user_groups.get_create']);
	$api->post('/settings/user-groups/create', 								['uses' => 'UserGroupsController@postEdit', 							'as' => 'user.user_groups.post_create']);
	$api->get('/settings/user-groups/delete/{id}', 							['uses' => 'UserGroupsController@getDelete', 							'as' => 'user.user_groups.get_delete']);
	$api->get('/settings/user-groups/permissions/{id}.json', 				['uses' => 'UserGroupsController@getPermissionsAjax', 					'as' => 'user.user_groups.get_permissions_ajax']);
	// $api->get('/settings/user-groups/edit/{id}', 						['uses' => 'UserGroupsController@getEdit', 								'as' => 'user.user_groups.get_edit']);
	// $api->post('/settings/user-groups/edit/{id}', 						['uses' => 'UserGroupsController@postEdit', 							'as' => 'user.user_groups.post_edit']);

	$api->get('/settings/black-white-list', 								['uses' => 'OtherController@getIndex', 									'as' => 'user.black_white_list.get_index']);
	$api->post('/settings/black-white-list/save', 							['uses' => 'OtherController@postSave', 									'as' => 'user.black_white_list.post_save']);
	$api->get('/nps/settings', 												['uses' => 'OtherController@npsSettings', 								'as' => 'user.nps.settings']);
	$api->post('/nps/saveSettings',											['uses' => 'OtherController@saveNpsSettings', 							'as' => 'user.nps.saveSettings']);
	// $api->get('/nps/{client}/{ticket}',									['uses' => 'web/NpsController@nps', 												'as' => 'user.nps']);
	// $api->post('/nps/rating', 											['uses' => 'web/NpsController@saveNpsRating', 										'as' => 'user.nps.rating']);
	// $api->get('/nps/default', 											['uses' => 'web/NpsController@defaultNps', 											'as' => 'user.nps.default']);
	$api->get('/ai/settings', 												['uses' => 'OtherController@aiSettings', 								'as' => 'user.ai.settings']);
	$api->post('/ai/settings', 												['uses' => 'OtherController@editAiSettings', 							'as' => 'user.ai.edit.settings']);
	$api->get('/settings/sla', 												['uses' => 'OtherController@getIndex', 									'as' => 'user.sla.get_index']);
	$api->post('/settings/sla/save/',  										['uses' => 'OtherController@postSave', 									'as' => 'user.sla.post_save']);
	$api->get('/settings/text-settings', 									['uses' => 'OtherController@getIndex', 									'as' => 'user.text_settings.get_index']);
	$api->post('/settings/text-settings/save', 								['uses' => 'OtherController@postSave', 									'as' => 'user.text_settings.post_save']);
	//what is this? 
	$api->post('/option/save-to-session',          							['uses' => 'OtherController@saveToSession', 							'as' => 'user.option.save']); 

	$api->get('/settings/additional-fields', 								['uses' => 'AdditionalFieldsController@getIndex', 						'as' => 'user.additional_fields.get_index']);
	$api->post('/settings/additional-fields/tickets/get-edit/{type}', 		['uses' => 'AdditionalFieldsController@getEditTicketField', 			'as' => 'user.additional_fields.tickets.get_edit']);
	$api->post('/settings/additional-fields/tickets/edit', 					['uses' => 'AdditionalFieldsController@postEditTicketField', 			'as' => 'user.additional_fields.tickets.post_edit']);
	$api->get('/settings/additional-fields/tickets/delete/{id}', 			['uses' => 'AdditionalFieldsController@deleteTicketField', 				'as' => 'user.additional_fields.tickets.get_delete']);
	$api->post('/settings/additional-fields/tickets/enable',   				['uses' => 'AdditionalFieldsController@enableAndSortTicketFields', 		'as' => 'user.additional_fields.tickets.get_enable']);
	$api->post('/settings/additional-fields/tickets/disable', 				['uses' => 'AdditionalFieldsController@disableTicketFields', 			'as' => 'user.additional_fields.tickets.get_disable']);
	$api->post('/settings/additional-fields/tickets/search',   				['uses' => 'AdditionalFieldsController@searchByTextField', 				'as' => 'user.additional_fields.tickets.get_search']);

	// $api->post('/settings/additional-fields/tickets/get-create', 		['uses' => 'AdditionalFieldsController@getCreateTicketField', 			'as' => 'user.additional_fields.tickets.get_create']);
	// $api->post('/settings/additional-fields/tickets/create', 			['uses' => 'AdditionalFieldsController@postCreateTicketField', 			'as' => 'user.additional_fields.tickets.post_create']);
	// $api->post('/settings/additional-fields/tickets/get-edit/{type}/{id}', ['uses' => 'AdditionalFieldsController@getEditTicketField', 			'as' => 'user.additional_fields.tickets.get_edit']);
	// $api->post('/settings/additional-fields/tickets/edit/{id}',			['uses' => 'AdditionalFieldsController@postEditTicketField', 			'as' => 'user.additional_fields.tickets.post_edit']);
});
