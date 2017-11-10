<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('/settings/blocks', 						['uses' => 'BlocksController@getIndex', 				'as' => 'user.company_custom_blocks.get_index']);
	$api->get('/settings/blocks/delete/{id}', 			['uses' => 'BlocksController@getDelete', 				'as' => 'user.company_custom_blocks.get_delete']);
	$api->post('/settings/blocks/sort', 				['uses' => 'BlocksController@postSort', 				'as' => 'user.company_custom_blocks.post_sort']);

	$api->post('/settings/blocks/create/dynamic', 		['uses' => 'DynamicController@postEditDynamic', 		'as' => 'user.company_custom_blocks.post_create_dynamic']);
	$api->get('/settings/blocks/create/dynamic', 		['uses' => 'DynamicController@getEditDynamic', 			'as' => 'user.company_custom_blocks.get_create_dynamic']);
	// $api->get('/settings/blocks/edit/dynamic/{id}', 	['uses' => 'BlocksController@getEditDynamic', 			'as' => 'user.company_custom_blocks.get_edit_dynamic']);
	// $api->post('/settings/blocks/edit/dynamic/{id}', ['uses' => 'BlocksController@postEditDynamic', 			'as' => 'user.company_custom_blocks.post_edit_dynamic']);



	$api->get('/settings/blocks/create/static', 		['uses' => 'StaticController@getEditStatic', 			'as' => 'user.company_custom_blocks.get_create_static']);
	$api->post('/settings/blocks/create/static', 		['uses' => 'StaticController@postEditStatic', 			'as' => 'user.company_custom_blocks.post_create_static']);
	// $api->get('/settings/blocks/edit/static/{id}', 	['uses' => 'BlocksController@getEditStatic', 			'as' => 'user.company_custom_blocks.get_edit_static']);
	// $api->post('/settings/blocks/edit/static/{id}', 	['uses' => 'BlocksController@postEditStatic', 			'as' => 'user.company_custom_blocks.post_edit_static']);


	$api->post('/settings/blocks/ajax', 				['uses' => 'other@getDynamicData', 						'as' => 'user.company_custom_blocks.get_dynamic_data']);
	$api->post('/settings/blocks/test-ajax', 			['uses' => 'other@testAjax', 							'as' => 'user.company_custom_blocks.test_ajax']);
	$api->post('/settings/blocks/payu', 				['uses' => 'other@getPayuBlock', 						'as' => 'user.company_custom_blocks.get_payu_block']);
	$api->post('/settings/blocks/retail_crm', 			['uses' => 'other@getRetailCrmBlock', 					'as' => 'user.company_custom_blocks.get_retail_crm_block']);
});


