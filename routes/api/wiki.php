<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	    /* ================== account ================== */

	$api->get('/wiki', 												['uses' => 'AccountController@index', 								'as' => 'user.support.get_index']);
	$api->get('/wiki/{account_id}', 								['uses' => 'AccountController@show', 								'as' => 'user.support.get_account'])->where('id', '[0-9]+');
	$api->post('/wiki/create', 										['uses' => 'AccountController@store', 								'as' => 'user.support.post_edit']);
	$api->put('/wiki/{account_id}', 								['uses' => 'AccountController@update', 								'as' => 'user.support.get_edit']);
	$api->delete('/wiki/{account_id}', 								['uses' => 'AccountController@destroy', 							'as' => 'user.support.get_delete']);

	    /* ================== collection ================== */				

	$api->get('/wiki/{account_id}/collection', 						['uses' => 'CollectionController@index', 					    	'as' => 'user.support.get_collection_create']);
	$api->get('/wiki/{account_id}/collection/{id}', 				['uses' => 'CollectionController@show', 					    	'as' => 'user.support.get_collection_edit']);
	$api->post('/wiki/{account_id}/collection/create', 				['uses' => 'CollectionController@store', 							'as' => 'user.support.post_collection_create']);
	$api->put('/wiki/{account_id}/collection/{id}', 				['uses' => 'CollectionController@update', 							'as' => 'user.support.post_collection_edit']);
	$api->delete('/wiki/{account_id}/collection/{id}', 				['uses' => 'CollectionController@destroy', 							'as' => 'user.support.get_collection_delete']);
	
	$api->get('/wiki/{account_id}/collection/copy/{id}', 			['uses' => 'CollectionController@copy', 							'as' => 'user.support.get_collection_copy']);
	$api->post('/wiki/{account_id}/collection/delete-multiple/', 	['uses' => 'CollectionController@destroyMultiple',   				'as' => 'user.support.post_collection_delete_multiple']);
	$api->post('/wiki/{account_id}/collection/copy-multiple/', 		['uses' => 'CollectionController@copyMultiple', 					'as' => 'user.support.post_collection_copy_multiple']);

	 /* ================== category ================== */				

	$api->get('/wiki/{account_id}/category', 						['uses' => 'CategoryController@index', 						   		'as' => 'user.support.get_category_create']);
	$api->get('/wiki/{account_id}/category/{id}', 					['uses' => 'CategoryController@show', 						    	'as' => 'user.support.get_category_edit']);
	$api->post('/wiki/{account_id}/category/create', 				['uses' => 'CategoryController@store', 								'as' => 'user.support.post_category_create']);
	$api->put('/wiki/{account_id}/category/update/{id}', 			['uses' => 'CategoryController@update', 					    	'as' => 'user.support.post_category_update']);
	$api->delete('/wiki/{account_id}/category/{id}', 				['uses' => 'CategoryController@destroy', 							'as' => 'user.support.get_category_delete']);
	
	$api->get('/wiki/{account_id}/category/copy/{id}', 				['uses' => 'CategoryController@copy', 								'as' => 'user.support.get_category_copy']);
	$api->post('/wiki/{account_id}/category/delete-multiple/', 		['uses' => 'CategoryController@destroyMultiple', 	    			'as' => 'user.support.post_category_delete_multiple']);
	$api->post('/wiki/{account_id}/category/copy-multiple/', 		['uses' => 'CategoryController@copyMultiple', 						'as' => 'user.support.post_category_copy_multiple']);

	 /* ================== article ================== */					

	$api->get('/wiki/{account_id}/article', 						['uses' => 'ArticleController@index', 								'as' => 'user.support.get_article_create']);
	$api->get('/wiki/{account_id}/article/{id}', 					['uses' => 'ArticleController@show', 								'as' => 'user.support.get_article_edit']);
	$api->post('/wiki/{account_id}/article/create', 				['uses' => 'ArticleController@store', 						   	 	'as' => 'user.support.post_article_create']);
	$api->put('/wiki/{account_id}/article/{id}', 					['uses' => 'ArticleController@update', 						    	'as' => 'user.support.post_article_edit']);
	$api->delete('/wiki/{account_id}/article/{id}', 				['uses' => 'ArticleController@destroy', 						    'as' => 'user.support.get_article_delete']);
	
	$api->get('/wiki/{account_id}/article/copy/{id}', 				['uses' => 'ArticleController@copy', 								'as' => 'user.support.get_article_copy']);	
	$api->post('/wiki/{account_id}/article/delete-multiple', 		['uses' => 'ArticleController@destroyMultiple', 					'as' => 'user.support.post_article_delete_multiple']);
	$api->post('/wiki/{account_id}/article/copy-multiple', 			['uses' => 'ArticleController@copyMultiple', 		    			'as' => 'user.support.post_article_copy_multiple']);


//  $api->get('/wiki/get-article-list', 							['uses' => 'ArticleController@getArticleList', 							'as' => 'user.support.get_article_list']);
//  $api->post('/wiki/get-article-json', 							['uses' => 'ArticleController@getArticleJson', 							'as' => 'user.support.get_article_json']);
//	$api->get('/wiki/{account_id}/delete-logo', 					['uses' => 'OtherController@getDeleteLogo', 							    'as' => 'user.support.get_delete_logo']);
//	$api->get('/wiki/json-search/{id}',         					['uses' => 'OtherController@jsonSearch', 								    'as' => 'user.support.json_search']);
//	$api->get('/wiki/json-search-article/{id}', 					['uses' => 'OtherController@jsonSearchArticle',							'as' => 'user.support.json_search_article']);
});
