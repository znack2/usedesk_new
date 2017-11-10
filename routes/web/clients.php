<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('/clients', 								['uses' => 'ClientsController@getIndex', 					'as' => 'user.clients.get_index']);
	$api->get('/clients/details/{id}', 					['uses' => 'ClientsController@getDetails', 					'as' => 'user.clients.get_details']);
	$api->get('/clients/create', 						['uses' => 'ClientsController@getEdit', 					'as' => 'user.clients.get_create']);
	$api->post('/clients/create', 						['uses' => 'ClientsController@postEdit', 					'as' => 'user.clients.post_create']);
	$api->get('/clients/delete/{id}', 					['uses' => 'ClientsController@getDelete', 					'as' => 'user.clients.get_delete']);
	$api->get('/clients/delete-avatar/{id}', 			['uses' => 'ClientsController@getDeleteAvatar', 			'as' => 'user.clients.get_delete_avatar']);
	$api->post('/clients/merge', 						['uses' => 'ClientsController@postMerge', 					'as' => 'user.clients.post_merge']);

	// $api->post('/clients/edit/{id}', 				['uses' => 'User_ClientsController@postEdit', 				'as' => 'user.clients.post_edit']);
	// $api->get('/clients/edit/{id}', 					['uses' => 'User_ClientsController@getEdit', 				'as' => 'user.clients.get_edit']);

	$api->get('/clients/companies', 					['uses' => 'CompaniesController@getIndex', 					'as' => 'user.client_companies.get_index']);
	$api->get('/clients/companies/create', 				['uses' => 'CompaniesController@getEdit', 					'as' => 'user.client_companies.get_create']);
	$api->post('/clients/companies/create', 			['uses' => 'CompaniesController@postEdit', 					'as' => 'user.client_companies.post_create']);
	$api->get('/clients/companies/delete/{id}', 		['uses' => 'CompaniesController@getDelete', 				'as' => 'user.client_companies.get_delete']);

	$api->get('/clients/companies/tickets/{id}', 		['uses' => 'CompaniesExtraController@getTickets', 			'as' => 'user.client_companies.get_tickets']);
	$api->get('/clients/companies/clients/{id}', 		['uses' => 'CompaniesExtraController@getClients', 			'as' => 'user.client_companies.get_clients']);
	$api->post('/clients/companies/vip/{id}', 			['uses' => 'CompaniesExtraController@getVip', 				'as' => 'user.client_companies.get_vip']);
	$api->post('/clients/companies/new-client/{id}', 	['uses' => 'CompaniesExtraController@newClientJson', 		'as' => 'user.client_companies.new_client_json']);
	$api->post('/clients/companies/get-client-name', 	['uses' => 'CompaniesExtraController@getClientNameByEmail', 'as' => 'user.client_companies.get_client_name)']);
	$api->get('/clients/companies/{id}', 				['uses' => 'CompaniesExtraController@getDetails', 			'as' => 'user.client_companies.get_details']);

	// $api->post('/clients/companies/edit/{id}', 		['uses' => 'User_ClientCompaniesController@postEdit', 		'as' => 'user.client_companies.post_edit']);
	// $api->get('/clients/companies/edit/{id}', 		['uses' => 'User_ClientCompaniesController@getEdit', 		'as' => 'user.client_companies.get_edit']);
});
