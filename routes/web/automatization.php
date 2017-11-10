<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	//triggers
	$api->get('/settings/triggers/create', 									['uses' => 'TriggersController@getEdit', 						'as' => 'user.triggers.get_create']);
	$api->post('/settings/triggers/create', 								['uses' => 'TriggersController@postEdit', 						'as' => 'user.triggers.post_create']);
	$api->get('/settings/triggers/{status?}', 								['uses' => 'TriggersController@getIndex', 						'as' => 'user.triggers.get_index']);
	$api->get('/settings/triggers/delete/{id}', 							['uses' => 'TriggersController@getDelete', 						'as' => 'user.triggers.get_delete']);

	$api->post('/settings/triggers/update-positions', 						['uses' => 'TriggersController@postUpdatePositions', 			'as' => 'user.triggers.post_update_positions']);
	$api->get('/settings/triggers/download-action-file/{id}', 				['uses' => 'TriggersController@downloadActionFile', 			'as' => 'user.triggers.get_download_action_file']);
	$api->get('/settings/triggers/delete-all-action-files/{action_id}', 	['uses' => 'TriggersController@deleteAllActionFiles', 			'as' => 'user.triggers.get_delete_all_action_files']);
	// $api->get('/settings/triggers', 										['uses' => 'web/settings/TriggersController@getIndex', 			'as' => 'user.triggers.get_index']);
	// $api->get('/settings/triggers/edit/{id}', 							['uses' => 'web/settings/TriggersController@getEdit', 			'as' => 'user.triggers.get_edit']);
	// $api->post('/settings/triggers/edit/{id}', 							['uses' => 'web/settings/TriggersController@postEdit', 			'as' => 'user.triggers.post_edit']);

	$api->get('/triggers/manual-starting', 									['uses' => 'ManualStartingController@getManualStarting', 		'as' => 'user.triggers.get_manual_starting']);
	$api->get('/triggers/manual-starting/{id}/start', 						['uses' => 'ManualStartingController@getManualStartingStart', 	'as' => 'user.triggers.get_manual_starting_start']);

	//macros
	$api->get('/settings/macroses/{status?}', 								['uses' => 'MacrosesController@index', 							'as' => 'user.macroses.get_index']);
	// $api->get('/settings/macroses', 										['uses' => 'MacrosesController@getIndex', 						'as' => 'user.macroses.get_index']);
	$api->get('/settings/macroses/create', 									['uses' => 'MacrosesController@create', 						'as' => 'user.macroses.get_create']);
	$api->get('/settings/macroses/edit/{id}', 								['uses' => 'MacrosesController@edit', 							'as' => 'user.macroses.get_edit']);
	$api->post('/settings/macroses/save', 									['uses' => 'MacrosesController@post', 							'as' => 'user.macroses.post_save']);
	$api->post('/settings/macroses/check-macros/{id}', 						['uses' => 'MacrosesController@check', 							'as' => 'user.macroses.post_check_macros']);
	$api->get('/settings/macroses/delete/{id}', 							['uses' => 'MacrosesController@delete', 						'as' => 'user.macroses.get_delete']);
	//multiple
	$api->post('/settings/macroses/delete-multiple', 						['uses' => 'MacrosesController@postDeleteMultiple',				'as' => 'user.macroses.post_delete_multiple']);
	$api->post('/settings/macroses/copy-multiple', 							['uses' => 'MacrosesController@postCopyMultiple', 				'as' => 'user.macroses.post_copy_multiple']);
	//category
	$api->post('/settings/macroses/category/order', 						['uses' => 'MacrosesCategoryController@postMacrosesPosition',	'as' => 'user.macroses.post_macroses_position']);
	$api->get('/settings/macroses/category/delete/{id}',   					['uses' => 'MacrosesCategoryController@getDeleteCategory', 		'as' => 'user.macroses.get_delete_category']);
	$api->post('/settings/macroses/category/edit', 							['uses' => 'MacrosesCategoryController@getCategoryEdit', 		'as' => 'user.macroses.get_category_edit']);
	//quick
	$api->any('/settings/macroses/get/quick', 								['uses' => 'MacrosesQuickController@index', 					'as' => 'user.macros.get.quick.list']);
	$api->get('/settings/macroses/chat', 									['uses' => 'MacrosesQuickController@get', 						'as' => 'user.macros.quick']);
	$api->post('/settings/macroses/create/quick', 							['uses' => 'MacrosesQuickController@create', 					'as' => 'user.macros.create.quick']);
	$api->post('/settings/macroses/delete/quick', 							['uses' => 'MacrosesQuickController@delete', 					'as' => 'user.macros.delete.quick']);
	$api->post('/settings/macroses/update/quick', 							['uses' => 'MacrosesQuickController@update', 					'as' => 'user.macros.update.quick']);
	//other
	$api->get('/settings/macroses/download-file/{id}', 						['uses' => 'MacrosesController@getDownloadFile', 				'as' => 'user.macroses.get_download_file']);
});


