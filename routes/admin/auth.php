<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->group(['before' => 'guest.admin'], function ($api) {
   	 	$api->get('/login', 			['uses' => 'AuthController@getLogin', 		'as' => 'admin.auth.get_login']);
    	$api->post('/login', 			['uses' => 'AuthController@postLogin', 		'as' => 'admin.auth.post_login']);
	});

	$api->get('/', 						['uses' => 'DashboardController@getIndex', 	'as' => 'admin.dashboard.get_index']);
	$api->get('/logout', 				['uses' => 'AuthController@getLogout', 		'as' => 'admin.auth.get_logout']);

	// CRUD

	$api->get('/admins', 				['uses' => 'AdminsController@getIndex', 	'as' => 'admin.admins.get_index']);
	$api->get('/admins/create', 		['uses' => 'AdminsController@getEdit', 		'as' => 'admin.admins.get_create']);
	$api->get('/admins/edit/{id}', 		['uses' => 'AdminsController@getEdit', 		'as' => 'admin.admins.get_edit']);
	$api->post('/admins/create', 		['uses' => 'AdminsController@postEdit', 	'as' => 'admin.admins.post_create']);
	$api->post('/admins/edit/{id}', 	['uses' => 'AdminsController@postEdit', 	'as' => 'admin.admins.post_edit']);
	$api->get('/admins/delete/{id}', 	['uses' => 'AdminsController@getDelete', 	'as' => 'admin.admins.get_delete']);
});

