<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('/blocks', 						['uses' => 'App\Http\Controllers\Blocks\BlockController@index', 					'as' => 'user.company_custom_blocks.get_index']);
	$api->get('/blocks/{id}', 					['uses' => 'App\Http\Controllers\Blocks\BlockController@show', 					    'as' => 'user.company_custom_blocks.get']);
	$api->get('/blocks/delete/{id}', 			['uses' => 'App\Http\Controllers\Blocks\BlockController@delete', 					'as' => 'user.company_custom_blocks.get_delete']);
	$api->post('/blocks/sort', 					['uses' => 'App\Http\Controllers\Blocks\BlockController@postSort', 					'as' => 'user.company_custom_blocks.post_sort']);
    /* ================== dynamic ================== */
	$api->post('/blocks/create/dynamic', 		['uses' => 'App\Http\Controllers\Blocks\DynamicController@store', 					'as' => 'user.company_custom_blocks.post_create_dynamic']);
	$api->get('/blocks/create/dynamic', 		['uses' => 'App\Http\Controllers\Blocks\DynamicController@create', 					'as' => 'user.company_custom_blocks.get_create_dynamic']);
	$api->get('/blocks/edit/dynamic/{id}', 		['uses' => 'App\Http\Controllers\Blocks\DynamicController@edit', 					'as' => 'user.company_custom_blocks.get_edit_dynamic']);
	$api->post('/blocks/edit/dynamic/{id}', 	['uses' => 'App\Http\Controllers\Blocks\DynamicController@update', 					'as' => 'user.company_custom_blocks.post_edit_dynamic']);
    /* ================== static ================== */
	$api->get('/blocks/create/static', 			['uses' => 'App\Http\Controllers\Blocks\StaticController@create', 					'as' => 'user.company_custom_blocks.get_create_static']);
	$api->post('/blocks/create/static', 		['uses' => 'App\Http\Controllers\Blocks\StaticController@store', 					'as' => 'user.company_custom_blocks.post_create_static']);
	$api->get('/blocks/edit/static/{id}', 		['uses' => 'App\Http\Controllers\Blocks\StaticController@edit', 					'as' => 'user.company_custom_blocks.get_edit_static']);
	$api->post('/blocks/edit/static/{id}', 		['uses' => 'App\Http\Controllers\Blocks\StaticController@update', 					'as' => 'user.company_custom_blocks.post_edit_static']);
    /* ================== custom ================== */
	$api->post('/blocks/ajax', 					['uses' => 'App\Http\Controllers\Blocks\CustomController@getDynamicData', 			'as' => 'user.company_custom_blocks.get_dynamic_data']);
	$api->post('/blocks/test-ajax', 			['uses' => 'App\Http\Controllers\Blocks\CustomController@testAjax', 				'as' => 'user.company_custom_blocks.test_ajax']);
	$api->post('/blocks/payu', 					['uses' => 'App\Http\Controllers\Blocks\CustomController@getPayuBlock', 			'as' => 'user.company_custom_blocks.get_payu_block']);
	$api->post('/blocks/retail_crm', 			['uses' => 'App\Http\Controllers\Blocks\CustomController@getRetailCrmBlock', 		'as' => 'user.company_custom_blocks.get_retail_crm_block']);

//    $api->get('search/{query}', function ($query) {
//        echo "\n<br>Query: ".$query."\n\n<br><br><br>";
//        $orgs = \App\Models\CompanyCustomBlock::search($query);
//        if($orgs->totalHits()) {
//            foreach ($orgs as $org) {
//                echo $org->name."(".$org->documentScore().")<br>\n";
//            }
//        } else {
//            echo "No result";
//        }
//        echo "\n<br>totalHits: ".$orgs->totalHits()."\n<br>";
//        echo "\n<br>maxScore: ".$orgs->maxScore()."\n<br>";
//        echo "\n<br>took: ".$orgs->took()."\n<br>";
//    });
});


