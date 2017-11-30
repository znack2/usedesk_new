<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    /* ================== clients ================== */

	$api->get('/clients', 								['uses' => 'ClientsController@index', 					'as' => 'user.clients.get_index']);
	$api->get('/clients/{id}', 							['uses' => 'ClientsController@show', 					'as' => 'user.clients.get_details']);
	$api->post('/clients/create', 						['uses' => 'ClientsController@store', 					'as' => 'user.clients.post_create']);
	$api->put('/clients/{id}', 							['uses' => 'ClientsController@update', 					'as' => 'user.clients.post_edit']);
	$api->post('/clients/merge', 						['uses' => 'ClientsController@merge', 					'as' => 'user.clients.post_merge']);
	$api->delete('/clients/{id}', 						['uses' => 'ClientsController@destroy', 				'as' => 'user.clients.get_delete']);

    /* ================== companies ================== */

	$api->get('/clients/companies', 					['uses' => 'CompaniesController@index', 				'as' => 'user.client_companies.get_index']);
	$api->get('/clients/companies/{id}', 				['uses' => 'CompaniesController@show', 					'as' => 'user.client_companies.get_details']);
	$api->post('/clients/companies/{id}', 				['uses' => 'CompaniesController@store', 				'as' => 'user.client_companies.post_edit']);
	$api->post('/clients/companies/create', 			['uses' => 'CompaniesController@update', 				'as' => 'user.client_companies.post_create']);
	$api->delete('/clients/companies/{id}', 			['uses' => 'CompaniesController@destroy', 				'as' => 'user.client_companies.get_delete']);

	/* ================== extra ================== */

	$api->get('/clients/companies/tickets/{id}', 		['uses' => 'CompaniesExtraController@getTickets', 			'as' => 'user.client_companies.get_tickets']);
	$api->get('/clients/companies/clients/{id}', 		['uses' => 'CompaniesExtraController@getClients', 			'as' => 'user.client_companies.get_clients']);
	$api->post('/clients/companies/vip/{id}', 			['uses' => 'CompaniesExtraController@getVip', 				'as' => 'user.client_companies.get_vip']);
	$api->post('/clients/companies/new-client/{id}', 	['uses' => 'CompaniesExtraController@newClientJson', 		'as' => 'user.client_companies.new_client_json']);
	$api->post('/clients/companies/get-client-name', 	['uses' => 'CompaniesExtraController@getClientNameByEmail', 'as' => 'user.client_companies.get_client_name)']);


	// $api->post('/create/comment', 			['uses' => 'clientsController@apiCreateComment', 		'as' => 'user.api.ticket']);
	// $api->any('/client', 		  			['uses' => 'clientsController@apiGetClient',	 		'as' => 'user.api.manual']);
	// $api->any('/clients', 		  			['uses' => 'clientsController@apiClients', 				'as' => 'user.api.manual']);
	// $api->post('/update/client', 			['uses' => 'clientsController@apiEditClient']);
});
