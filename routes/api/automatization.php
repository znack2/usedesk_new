<?php

Route::prefix('api')->group(function () {

    /* ================== triggers ================== */

	Route::get('triggers/{status?}', 								['uses' => 'Trigger\TriggerController@index', 						'as' => 'user.triggers.get_index']);
	Route::post('triggers/create', 									['uses' => 'Trigger\TriggerController@store', 						'as' => 'user.triggers.post_create']);
	Route::put('triggers/{id}', 									['uses' => 'Trigger\TriggerController@update', 						'as' => 'user.triggers.post_edit']);
	Route::put('triggers/update-positions', 						['uses' => 'Trigger\TriggerController@updatePositions', 			'as' => 'user.triggers.post_update_positions']);
	Route::delete('triggers/{id}', 									['uses' => 'Trigger\TriggerController@destroy', 					'as' => 'user.triggers.get_delete']);
	Route::get('/triggers/manual-starting', 						['uses' => 'Trigger\TriggerController@getManualStarting', 			'as' => 'user.triggers.get_manual_starting']);
	Route::get('/triggers/manual-starting/{id}/start', 				['uses' => 'Trigger\TriggerController@getManualStartingStart', 		'as' => 'user.triggers.get_manual_starting_start']);


    /* ================== macros ================== */

	Route::get('macroses/{status?}', 								['uses' => 'Macros\MacrosController@index', 						'as' => 'user.macroses.get_index']);
	Route::get('macroses/create', 									['uses' => 'Macros\MacrosController@create', 						'as' => 'user.macroses.get_create']);
	Route::get('macroses/{id}', 									['uses' => 'Macros\MacrosController@edit', 							'as' => 'user.macroses.get_edit']);
	Route::post('macroses/save', 									['uses' => 'Macros\MacrosController@post', 							'as' => 'user.macroses.post_save']);
	Route::post('macroses/check-macros/{id}', 						['uses' => 'Macros\MacrosController@check', 						'as' => 'user.macroses.post_check_macros']);
	Route::delete('macroses/{id}', 									['uses' => 'Macros\MacrosController@delete', 						'as' => 'user.macroses.get_delete']);
	Route::post('macroses/delete-multiple', 						['uses' => 'Macros\MacrosController@deleteMultiple',				'as' => 'user.macroses.post_delete_multiple']);
	Route::post('macroses/copy-multiple', 							['uses' => 'Macros\MacrosController@copyMultiple', 					'as' => 'user.macroses.post_copy_multiple']);

    /* ================== category ================== */

	Route::put('macroses/category/order', 							['uses' => 'Macros\MacrosCategoryController@postMacrosesPosition',	'as' => 'user.macroses.post_macroses_position']);
	Route::delete('macroses/category/{id}',   						['uses' => 'Macros\MacrosCategoryController@getDeleteCategory', 	'as' => 'user.macroses.get_delete_category']);
	Route::put('macroses/category', 								['uses' => 'Macros\MacrosCategoryController@getCategoryEdit', 		'as' => 'user.macroses.get_category_edit']);

    /* ================== quick ================== */

	Route::get('macroses/get/quick', 								['uses' => 'Macros\MacrosQuickController@index', 					'as' => 'user.macros.get.quick.list']);
	Route::get('macroses/chat', 									['uses' => 'Macros\MacrosQuickController@show', 					'as' => 'user.macros.quick']);
	Route::post('macroses/create/quick', 							['uses' => 'Macros\MacrosQuickController@store', 					'as' => 'user.macros.create.quick']);
	Route::post('macroses/update/quick', 							['uses' => 'Macros\MacrosQuickController@update', 					'as' => 'user.macros.update.quick']);
	Route::delete('macroses/quick', 								['uses' => 'Macros\MacrosQuickController@destroy', 					'as' => 'user.macros.delete.quick']);

});


