<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	$api->get('/settings/support', 												['uses' => 'SupportController@getIndex', 								'as' => 'user.support.get_index']);
	$api->get('/settings/support/{id}', 										['uses' => 'SupportController@getAccount', 								'as' => 'user.support.get_account'])->where('id', '[0-9]+');
	$api->get('/settings/support/create', 										['uses' => 'SupportController@getEdit', 								'as' => 'user.support.get_create']);
	$api->get('/settings/support/edit/{id}', 									['uses' => 'SupportController@getEdit', 								'as' => 'user.support.get_edit']);
	$api->post('/settings/support/edit/{id?}', 									['uses' => 'SupportController@postEdit', 								'as' => 'user.support.post_edit']);
	$api->get('/settings/support/delete/{id}', 									['uses' => 'SupportController@getDelete', 								'as' => 'user.support.get_delete']);
	//collection				
	$api->get('/settings/support/{account_id}/collection/create', 				['uses' => 'CollectionController@getCollectionEdit', 					'as' => 'user.support.get_collection_create']);
	$api->get('/settings/support/{account_id}/collection/edit/{id}', 			['uses' => 'CollectionController@getCollectionEdit', 					'as' => 'user.support.get_collection_edit']);
	$api->post('/settings/support/{account_id}/collection/edit/{id}', 			['uses' => 'CollectionController@postCollectionEdit', 					'as' => 'user.support.post_collection_edit']);
	$api->post('/settings/support/{account_id}/collection/create', 				['uses' => 'CollectionController@postCollectionEdit', 					'as' => 'user.support.post_collection_create']);
	$api->post('/settings/support/{account_id}/collection/update', 				['uses' => 'CollectionController@postCollectionUpdate', 				'as' => 'user.support.post_collection_update']);
	$api->get('/settings/support/{account_id}/collection/delete/{id}', 			['uses' => 'CollectionController@getCollectionDelete', 					'as' => 'user.support.get_collection_delete']);
	$api->get('/settings/support/{account_id}/collection/copy/{id}', 			['uses' => 'CollectionController@getCollectionCopy', 					'as' => 'user.support.get_collection_copy']);
	$api->post('/settings/support/{account_id}/collection/delete-multiple/', 	['uses' => 'multiple/CollectionController@postCollectionDeleteMultiple','as' => 'user.support.post_collection_delete_multiple']);
	$api->post('/settings/support/{account_id}/collection/copy-multiple/', 		['uses' => 'multiple/CollectionController@postCollectionCopyMultiple', 	'as' => 'user.support.post_collection_copy_multiple']);
	//category				
	$api->get('/settings/support/{account_id}/category/create', 				['uses' => 'CategoryController@getCategoryEdit', 						'as' => 'user.support.get_category_create']);
	$api->get('/settings/support/{account_id}/category/edit/{id}', 				['uses' => 'CategoryController@getCategoryEdit', 						'as' => 'user.support.get_category_edit']);
	$api->post('/settings/support/{account_id}/category/edit/{id}', 			['uses' => 'CategoryController@postCategoryEdit', 						'as' => 'user.support.post_category_edit']);
	$api->post('/settings/support/{account_id}/category/create', 				['uses' => 'CategoryController@postCategoryEdit', 						'as' => 'user.support.post_category_create']);
	$api->post('/settings/support/{account_id}/category/update/{id}', 			['uses' => 'CategoryController@postCategoryUpdate', 					'as' => 'user.support.post_category_update']);
	$api->get('/settings/support/{account_id}/category/delete/{id}', 			['uses' => 'CategoryController@getCategoryDelete', 						'as' => 'user.support.get_category_delete']);
	$api->get('/settings/support/{account_id}/category/copy/{id}', 				['uses' => 'CategoryController@getCategoryCopy', 						'as' => 'user.support.get_category_copy']);
	$api->post('/settings/support/{account_id}/category/delete-multiple/', 		['uses' => 'multiple/CategoryController@postCategoryDeleteMultiple', 	'as' => 'user.support.post_category_delete_multiple']);
	$api->post('/settings/support/{account_id}/category/copy-multiple/', 		['uses' => 'multiple/CategoryController@postCategoryCopyMultiple', 		'as' => 'user.support.post_category_copy_multiple']);
	//article				
	$api->get('/settings/support/{account_id}/article/create', 					['uses' => 'ArticleController@getArticleEdit', 							'as' => 'user.support.get_article_create']);
	$api->get('/settings/support/{account_id}/article/edit/{id}', 				['uses' => 'ArticleController@getArticleEdit', 							'as' => 'user.support.get_article_edit']);
	$api->post('/settings/support/{account_id}/article/edit/{id}', 				['uses' => 'ArticleController@postArticleEdit', 						'as' => 'user.support.post_article_edit']);
	$api->post('/settings/support/{account_id}/article/create', 				['uses' => 'ArticleController@postArticleEdit', 						'as' => 'user.support.post_article_create']);
	$api->post('/settings/support/{account_id}/article/update/{id}', 			['uses' => 'ArticleController@postArticleUpdate', 						'as' => 'user.support.post_article_update']);
	$api->get('/settings/support/{account_id}/article/delete/{id}', 			['uses' => 'ArticleController@getArticleDelete', 						'as' => 'user.support.get_article_delete']);
	$api->get('/settings/support/{account_id}/article/copy/{id}', 				['uses' => 'ArticleController@getArticleCopy', 							'as' => 'user.support.get_article_copy']);
	$api->get('/settings/support/get-article-list', 							['uses' => 'ArticleController@getArticleList', 							'as' => 'user.support.get_article_list']);
	$api->post('/settings/support/get-article-json', 							['uses' => 'ArticleController@getArticleJson', 							'as' => 'user.support.get_article_json']);
	$api->post('/settings/support/{account_id}/article/delete-multiple', 		['uses' => 'multiple/ArticleController@postArticleDeleteMultiple', 		'as' => 'user.support.post_article_delete_multiple']);
	$api->post('/settings/support/{account_id}/article/copy-multiple', 			['uses' => 'multiple/ArticleController@postArticleCopyMultiple', 		'as' => 'user.support.post_article_copy_multiple']);

	$api->get('/settings/support/{account_id}/delete-logo', 					['uses' => 'OtherController@getDeleteLogo', 							'as' => 'user.support.get_delete_logo']);
	$api->get('/support/json-search/{id}',         								['uses' => 'OtherController@jsonSearch', 								'as' => 'user.support.json_search']);
	$api->get('/support/json-search-article/{id}', 								['uses' => 'OtherController@jsonSearchArticle',							'as' => 'user.support.json_search_article']);
});
