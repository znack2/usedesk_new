<?php

Route::prefix('api')->group(function () {

	    /* ================== account ================== */

	Route::get('/wiki', 											['uses' => 'Wiki\AccountController@index', 								'as' => 'user.support.get_index']);
	Route::get('/wiki/{account_id}', 								['uses' => 'Wiki\AccountController@show', 								'as' => 'user.support.get_account'])->where('id', '[0-9]+');
	Route::post('/wiki/create', 									['uses' => 'Wiki\AccountController@store', 								'as' => 'user.support.post_edit']);
	Route::put('/wiki/{account_id}', 								['uses' => 'Wiki\AccountController@update', 							'as' => 'user.support.get_edit']);
	Route::delete('/wiki/{account_id}', 							['uses' => 'Wiki\AccountController@destroy', 							'as' => 'user.support.get_delete']);

	    /* ================== collection ================== */				

	Route::get('/wiki/{account_id}/collection', 					['uses' => 'Wiki\CollectionController@index', 					    	'as' => 'user.support.get_collection_create']);
	Route::get('/wiki/{account_id}/collection/{id}', 				['uses' => 'Wiki\CollectionController@show', 					    	'as' => 'user.support.get_collection_edit']);
	Route::post('/wiki/{account_id}/collection/create', 			['uses' => 'Wiki\CollectionController@store', 							'as' => 'user.support.post_collection_create']);
	Route::put('/wiki/{account_id}/collection/{id}', 				['uses' => 'Wiki\CollectionController@update', 							'as' => 'user.support.post_collection_edit']);
	Route::delete('/wiki/{account_id}/collection/{id}', 			['uses' => 'Wiki\CollectionController@destroy', 						'as' => 'user.support.get_collection_delete']);
	
	Route::get('/wiki/{account_id}/collection/copy/{id}', 			['uses' => 'Wiki\CollectionController@copy', 							'as' => 'user.support.get_collection_copy']);
	Route::post('/wiki/{account_id}/collection/delete-multiple/', 	['uses' => 'Wiki\CollectionController@destroyMultiple',   				'as' => 'user.support.post_collection_delete_multiple']);
	Route::post('/wiki/{account_id}/collection/copy-multiple/', 	['uses' => 'Wiki\CollectionController@copyMultiple', 					'as' => 'user.support.post_collection_copy_multiple']);

	 /* ================== category ================== */				

	Route::get('/wiki/{account_id}/category', 						['uses' => 'Wiki\CategoryController@index', 						   	'as' => 'user.support.get_category_create']);
	Route::get('/wiki/{account_id}/category/{id}', 					['uses' => 'Wiki\CategoryController@show', 						    	'as' => 'user.support.get_category_edit']);
	Route::post('/wiki/{account_id}/category/create', 				['uses' => 'Wiki\CategoryController@store', 							'as' => 'user.support.post_category_create']);
	Route::put('/wiki/{account_id}/category/update/{id}', 			['uses' => 'Wiki\CategoryController@update', 					    	'as' => 'user.support.post_category_update']);
	Route::delete('/wiki/{account_id}/category/{id}', 				['uses' => 'Wiki\CategoryController@destroy', 							'as' => 'user.support.get_category_delete']);
	
	Route::get('/wiki/{account_id}/category/copy/{id}', 			['uses' => 'Wiki\CategoryController@copy', 								'as' => 'user.support.get_category_copy']);
	Route::post('/wiki/{account_id}/category/delete-multiple/', 	['uses' => 'Wiki\CategoryController@destroyMultiple', 	    			'as' => 'user.support.post_category_delete_multiple']);
	Route::post('/wiki/{account_id}/category/copy-multiple/', 		['uses' => 'Wiki\CategoryController@copyMultiple', 						'as' => 'user.support.post_category_copy_multiple']);

	 /* ================== article ================== */					

	Route::get('/wiki/{account_id}/article', 						['uses' => 'Wiki\ArticleController@index', 								'as' => 'user.support.get_article_create']);
	Route::get('/wiki/{account_id}/article/{id}', 					['uses' => 'Wiki\ArticleController@show', 								'as' => 'user.support.get_article_edit']);
	Route::post('/wiki/{account_id}/article/create', 				['uses' => 'Wiki\ArticleController@store', 						   	 	'as' => 'user.support.post_article_create']);
	Route::put('/wiki/{account_id}/article/{id}', 					['uses' => 'Wiki\ArticleController@update', 						    'as' => 'user.support.post_article_edit']);
	Route::delete('/wiki/{account_id}/article/{id}', 				['uses' => 'Wiki\ArticleController@destroy', 						    'as' => 'user.support.get_article_delete']);
	
	Route::get('/wiki/{account_id}/article/copy/{id}', 				['uses' => 'Wiki\ArticleController@copy', 								'as' => 'user.support.get_article_copy']);	
	Route::post('/wiki/{account_id}/article/delete-multiple', 		['uses' => 'Wiki\ArticleController@destroyMultiple', 					'as' => 'user.support.post_article_delete_multiple']);
	Route::post('/wiki/{account_id}/article/copy-multiple', 		['uses' => 'Wiki\ArticleController@copyMultiple', 		    			'as' => 'user.support.post_article_copy_multiple']);


//  Route::get('/wiki/get-article-list', 							['uses' => 'Wiki\ArticleController@getArticleList', 							'as' => 'user.support.get_article_list']);
//  Route::post('/wiki/get-article-json', 							['uses' => 'Wiki\ArticleController@getArticleJson', 							'as' => 'user.support.get_article_json']);
//	Route::get('/wiki/{account_id}/delete-logo', 					['uses' => 'Wiki\OtherController@getDeleteLogo', 							    'as' => 'user.support.get_delete_logo']);
//	Route::get('/wiki/json-search/{id}',         					['uses' => 'Wiki\OtherController@jsonSearch', 								    'as' => 'user.support.json_search']);
//	Route::get('/wiki/json-search-article/{id}', 					['uses' => 'Wiki\OtherController@jsonSearchArticle',							'as' => 'user.support.json_search_article']);
});
