<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    /* ================== triggers ================== */

	$api->get('triggers/{status?}', 								['uses' => 'TriggersController@index', 							'as' => 'user.triggers.get_index']);
	$api->post('triggers/create', 									['uses' => 'TriggersController@store', 							'as' => 'user.triggers.post_create']);
	$api->put('triggers/{id}', 										['uses' => 'TriggersController@update', 						'as' => 'user.triggers.post_edit']);
	$api->put('triggers/update-positions', 							['uses' => 'TriggersController@updatePositions', 				'as' => 'user.triggers.post_update_positions']);
	$api->delete('triggers/{id}', 									['uses' => 'TriggersController@destroy', 						'as' => 'user.triggers.get_delete']);
	$api->get('/triggers/manual-starting', 							['uses' => 'TriggersController@getManualStarting', 				'as' => 'user.triggers.get_manual_starting']);
	$api->get('/triggers/manual-starting/{id}/start', 				['uses' => 'TriggersController@getManualStartingStart', 		'as' => 'user.triggers.get_manual_starting_start']);


    /* ================== macros ================== */

	$api->get('macroses/{status?}', 								['uses' => 'MacrosesController@index', 							'as' => 'user.macroses.get_index']);
	$api->get('macroses/create', 									['uses' => 'MacrosesController@create', 						'as' => 'user.macroses.get_create']);
	$api->get('macroses/{id}', 										['uses' => 'MacrosesController@edit', 							'as' => 'user.macroses.get_edit']);
	$api->post('macroses/save', 									['uses' => 'MacrosesController@post', 							'as' => 'user.macroses.post_save']);
	$api->post('macroses/check-macros/{id}', 						['uses' => 'MacrosesController@check', 							'as' => 'user.macroses.post_check_macros']);
	$api->delete('macroses/{id}', 									['uses' => 'MacrosesController@delete', 						'as' => 'user.macroses.get_delete']);
	$api->post('macroses/delete-multiple', 							['uses' => 'MacrosesController@deleteMultiple',					'as' => 'user.macroses.post_delete_multiple']);
	$api->post('macroses/copy-multiple', 							['uses' => 'MacrosesController@copyMultiple', 					'as' => 'user.macroses.post_copy_multiple']);

    /* ================== category ================== */

	$api->put('macroses/category/order', 							['uses' => 'MacrosesCategoryController@postMacrosesPosition',	'as' => 'user.macroses.post_macroses_position']);
	$api->delete('macroses/category/{id}',   						['uses' => 'MacrosesCategoryController@getDeleteCategory', 		'as' => 'user.macroses.get_delete_category']);
	$api->put('macroses/category', 									['uses' => 'MacrosesCategoryController@getCategoryEdit', 		'as' => 'user.macroses.get_category_edit']);

    /* ================== quick ================== */

	$api->get('macroses/get/quick', 								['uses' => 'MacrosesQuickController@index', 					'as' => 'user.macros.get.quick.list']);
	$api->get('macroses/chat', 										['uses' => 'MacrosesQuickController@show', 						'as' => 'user.macros.quick']);
	$api->post('macroses/create/quick', 							['uses' => 'MacrosesQuickController@store', 					'as' => 'user.macros.create.quick']);
	$api->post('macroses/update/quick', 							['uses' => 'MacrosesQuickController@update', 					'as' => 'user.macros.update.quick']);
	$api->delete('macroses/quick', 									['uses' => 'MacrosesQuickController@destroy', 					'as' => 'user.macros.delete.quick']);

});


