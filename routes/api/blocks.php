<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {


//    $api->apiResource('blocks', 'BlockController')->middleware('locationRedirect');

    /* ================== blocks ================== */

    $api->get('blocks', 						['uses' => 'BlockController@index', 					'as' => 'user.company_custom_blocks.get_index']);
	$api->get('blocks/{id}', 					['uses' => 'BlockController@show', 					    'as' => 'user.company_custom_blocks.get']);
	$api->post('blocks/store', 		        	['uses' => 'BlockController@store', 					'as' => 'user.company_custom_blocks.post_create_static']);
	$api->put('blocks/{id}', 		    		['uses' => 'BlockController@update', 					'as' => 'user.company_custom_blocks.post_edit_static']);
	$api->put('blocks/sort', 					['uses' => 'BlockController@sort', 					    'as' => 'user.company_custom_blocks.post_sort']);
	$api->delete('blocks/{id}', 		        ['uses' => 'BlockController@destroy', 					'as' => 'user.company_custom_blocks.get_delete']);

    /* ================== custom ================== */

	// $api->post('/blocks/ajax', 					['uses' => 'CustomController@getDynamicData', 			'as' => 'user.company_custom_blocks.get_dynamic_data']);
	// $api->post('/blocks/test-ajax', 			['uses' => 'CustomController@testAjax', 				'as' => 'user.company_custom_blocks.test_ajax']);
	$api->post('/blocks/payu', 					['uses' => 'CustomController@getPayuBlock', 			'as' => 'user.company_custom_blocks.get_payu_block']);
	$api->post('/blocks/retail_crm', 			['uses' => 'CustomController@getRetailCrmBlock', 		'as' => 'user.company_custom_blocks.get_retail_crm_block']);
});


