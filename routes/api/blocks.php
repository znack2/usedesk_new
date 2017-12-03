<?php

// $api = app('Dingo\Api\Routing\Router');

Route::prefix('api')->group(function () {

// $api = new Route;

//    Route::apiResource('blocks', 'Blocks\BlockController')->middleware('locationRedirect');

    /* ================== blocks ================== */

    Route::get('blocks', 						['uses' => 'Blocks\BlockController@index', 						'as' => 'user.company_custom_blocks.get_index']);
	Route::get('blocks/{id}', 					['uses' => 'Blocks\BlockController@show', 					    'as' => 'user.company_custom_blocks.get']);
	Route::post('blocks/store', 		        ['uses' => 'Blocks\BlockController@store', 						'as' => 'user.company_custom_blocks.post_create_static']);
	Route::put('blocks/{id}', 		    		['uses' => 'Blocks\BlockController@update', 					'as' => 'user.company_custom_blocks.post_edit_static']);
	Route::put('blocks/sort', 					['uses' => 'Blocks\BlockController@sort', 					    'as' => 'user.company_custom_blocks.post_sort']);
	Route::delete('blocks/{id}', 		        ['uses' => 'Blocks\BlockController@destroy', 					'as' => 'user.company_custom_blocks.get_delete']);

    /* ================== custom ================== */

	// Route::post('/blocks/ajax', 					['uses' => 'CustomController@getDynamicData', 			'as' => 'user.company_custom_blocks.get_dynamic_data']);
	// Route::post('/blocks/test-ajax', 			['uses' => 'CustomController@testAjax', 				'as' => 'user.company_custom_blocks.test_ajax']);


	Route::post('/blocks/yandex/store', 		['uses' => 'Blocks\CustomController@createRetailCrmBlock', 			'as' => 'user.company_custom_blocks.get_payu_block']);
	Route::post('/blocks/retail_crm/store', 	['uses' => 'Blocks\CustomController@createYandexDefaultBlock', 		'as' => 'user.company_custom_blocks.get_retail_crm_block']);
});


