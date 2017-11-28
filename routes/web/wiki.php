<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	$api->get('/wiki', 												['uses' => 'App\Http\Controllers\Wiki\AccountController@getIndex', 								    'as' => 'user.support.get_index']);
	$api->get('/wiki/{id}', 										['uses' => 'App\Http\Controllers\Wiki\AccountController@getAccount', 								'as' => 'user.support.get_account'])->where('id', '[0-9]+');
	$api->get('/wiki/create', 										['uses' => 'App\Http\Controllers\Wiki\AccountController@getEdit', 								    'as' => 'user.support.get_create']);
	$api->get('/wiki/edit/{id}', 									['uses' => 'App\Http\Controllers\Wiki\AccountController@getEdit', 								    'as' => 'user.support.get_edit']);
	$api->post('/wiki/edit/{id?}', 									['uses' => 'App\Http\Controllers\Wiki\AccountController@postEdit', 								    'as' => 'user.support.post_edit']);
	$api->get('/wiki/delete/{id}', 									['uses' => 'App\Http\Controllers\Wiki\AccountController@getDelete', 								'as' => 'user.support.get_delete']);
	//collection				
	$api->get('/wiki/{account_id}/collection/create', 				['uses' => 'App\Http\Controllers\Wiki\CollectionController@getCollectionEdit', 					    'as' => 'user.support.get_collection_create']);
	$api->get('/wiki/{account_id}/collection/edit/{id}', 			['uses' => 'App\Http\Controllers\Wiki\CollectionController@getCollectionEdit', 					    'as' => 'user.support.get_collection_edit']);
	$api->post('/wiki/{account_id}/collection/edit/{id}', 			['uses' => 'App\Http\Controllers\Wiki\CollectionController@postCollectionEdit', 					'as' => 'user.support.post_collection_edit']);
	$api->post('/wiki/{account_id}/collection/create', 				['uses' => 'App\Http\Controllers\Wiki\CollectionController@postCollectionEdit', 					'as' => 'user.support.post_collection_create']);
	$api->post('/wiki/{account_id}/collection/update', 				['uses' => 'App\Http\Controllers\Wiki\CollectionController@postCollectionUpdate', 				    'as' => 'user.support.post_collection_update']);
	$api->get('/wiki/{account_id}/collection/delete/{id}', 			['uses' => 'App\Http\Controllers\Wiki\CollectionController@getCollectionDelete', 					'as' => 'user.support.get_collection_delete']);
	$api->get('/wiki/{account_id}/collection/copy/{id}', 			['uses' => 'App\Http\Controllers\Wiki\CollectionController@getCollectionCopy', 					    'as' => 'user.support.get_collection_copy']);
	$api->post('/wiki/{account_id}/collection/delete-multiple/', 	['uses' => 'App\Http\Controllers\Wiki\CollectionController@postCollectionDeleteMultiple',           'as' => 'user.support.post_collection_delete_multiple']);
	$api->post('/wiki/{account_id}/collection/copy-multiple/', 		['uses' => 'App\Http\Controllers\Wiki\CollectionController@postCollectionCopyMultiple', 	        'as' => 'user.support.post_collection_copy_multiple']);
	//category				
	$api->get('/wiki/{account_id}/category/create', 				['uses' => 'App\Http\Controllers\Wiki\CategoryController@getCategoryEdit', 						    'as' => 'user.support.get_category_create']);
	$api->get('/wiki/{account_id}/category/edit/{id}', 				['uses' => 'App\Http\Controllers\Wiki\CategoryController@getCategoryEdit', 						    'as' => 'user.support.get_category_edit']);
	$api->post('/wiki/{account_id}/category/edit/{id}', 			['uses' => 'App\Http\Controllers\Wiki\CategoryController@postCategoryEdit', 						'as' => 'user.support.post_category_edit']);
	$api->post('/wiki/{account_id}/category/create', 				['uses' => 'App\Http\Controllers\Wiki\CategoryController@postCategoryEdit', 						'as' => 'user.support.post_category_create']);
	$api->post('/wiki/{account_id}/category/update/{id}', 			['uses' => 'App\Http\Controllers\Wiki\CategoryController@postCategoryUpdate', 					    'as' => 'user.support.post_category_update']);
	$api->get('/wiki/{account_id}/category/delete/{id}', 			['uses' => 'App\Http\Controllers\Wiki\CategoryController@getCategoryDelete', 						'as' => 'user.support.get_category_delete']);
	$api->get('/wiki/{account_id}/category/copy/{id}', 				['uses' => 'App\Http\Controllers\Wiki\CategoryController@getCategoryCopy', 						    'as' => 'user.support.get_category_copy']);
	$api->post('/wiki/{account_id}/category/delete-multiple/', 		['uses' => 'App\Http\Controllers\Wiki\CategoryController@postCategoryDeleteMultiple', 	            'as' => 'user.support.post_category_delete_multiple']);
	$api->post('/wiki/{account_id}/category/copy-multiple/', 		['uses' => 'App\Http\Controllers\Wiki\CategoryController@postCategoryCopyMultiple', 		        'as' => 'user.support.post_category_copy_multiple']);
	//article				
	$api->get('/wiki/{account_id}/article/create', 					['uses' => 'App\Http\Controllers\Wiki\ArticleController@getArticleEdit', 							'as' => 'user.support.get_article_create']);
	$api->get('/wiki/{account_id}/article/edit/{id}', 				['uses' => 'App\Http\Controllers\Wiki\ArticleController@getArticleEdit', 							'as' => 'user.support.get_article_edit']);
	$api->post('/wiki/{account_id}/article/edit/{id}', 				['uses' => 'App\Http\Controllers\Wiki\ArticleController@postArticleEdit', 						    'as' => 'user.support.post_article_edit']);
	$api->post('/wiki/{account_id}/article/create', 				['uses' => 'App\Http\Controllers\Wiki\ArticleController@postArticleEdit', 						    'as' => 'user.support.post_article_create']);
	$api->post('/wiki/{account_id}/article/update/{id}', 			['uses' => 'App\Http\Controllers\Wiki\ArticleController@postArticleUpdate', 						'as' => 'user.support.post_article_update']);
	$api->get('/wiki/{account_id}/article/delete/{id}', 			['uses' => 'App\Http\Controllers\Wiki\ArticleController@getArticleDelete', 						    'as' => 'user.support.get_article_delete']);
	$api->get('/wiki/{account_id}/article/copy/{id}', 				['uses' => 'App\Http\Controllers\Wiki\ArticleController@getArticleCopy', 							'as' => 'user.support.get_article_copy']);
	$api->get('/wiki/get-article-list', 							['uses' => 'App\Http\Controllers\Wiki\ArticleController@getArticleList', 							'as' => 'user.support.get_article_list']);
	$api->post('/wiki/get-article-json', 							['uses' => 'App\Http\Controllers\Wiki\ArticleController@getArticleJson', 							'as' => 'user.support.get_article_json']);
	$api->post('/wiki/{account_id}/article/delete-multiple', 		['uses' => 'App\Http\Controllers\Wiki\ArticleController@postArticleDeleteMultiple', 		        'as' => 'user.support.post_article_delete_multiple']);
	$api->post('/wiki/{account_id}/article/copy-multiple', 			['uses' => 'App\Http\Controllers\Wiki\ArticleController@postArticleCopyMultiple', 		            'as' => 'user.support.post_article_copy_multiple']);

//	$api->get('/wiki/{account_id}/delete-logo', 					['uses' => 'App\Http\Controllers\Wiki\OtherController@getDeleteLogo', 							    'as' => 'user.support.get_delete_logo']);
//	$api->get('/wiki/json-search/{id}',         					['uses' => 'App\Http\Controllers\Wiki\OtherController@jsonSearch', 								    'as' => 'user.support.json_search']);
//	$api->get('/wiki/json-search-article/{id}', 					['uses' => 'App\Http\Controllers\Wiki\OtherController@jsonSearchArticle',							'as' => 'user.support.json_search_article']);
});
