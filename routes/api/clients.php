<?php

Route::prefix('api')->group(function () {
    /* ================== clients ================== */

	Route::get('/clients', 								['uses' => 'Clients\ClientController@index', 					'as' => 'user.clients.get_index']);
	Route::get('/clients/{id}', 						['uses' => 'Clients\ClientController@show', 					'as' => 'user.clients.get_details']);
	Route::post('/clients/store', 						['uses' => 'Clients\ClientController@store', 					'as' => 'user.clients.post_create']);
	Route::put('/clients/{id}', 						['uses' => 'Clients\ClientController@update', 					'as' => 'user.clients.post_edit']);
	// Route::post('/clients/merge', 						['uses' => 'Clients\ClientController@merge', 					'as' => 'user.clients.post_merge']);
	Route::delete('/clients/{id}', 						['uses' => 'Clients\ClientController@destroy', 					'as' => 'user.clients.get_delete']);

    /* ================== companies ================== */

	// Route::get('/clients/companies', 					['uses' => 'CompaniesController@index', 				'as' => 'user.client_companies.get_index']);
	// Route::get('/clients/companies/{id}', 				['uses' => 'CompaniesController@show', 					'as' => 'user.client_companies.get_details']);
	// Route::post('/clients/companies/store', 			['uses' => 'CompaniesController@store', 				'as' => 'user.client_companies.post_edit']);
	// Route::post('/clients/companies/{id}', 				['uses' => 'CompaniesController@update', 				'as' => 'user.client_companies.post_create']);
	// Route::delete('/clients/companies/{id}', 			['uses' => 'CompaniesController@destroy', 				'as' => 'user.client_companies.get_delete']);

	/* ================== extra ================== */

	// Route::get('/clients/companies/tickets/{id}', 		['uses' => 'CompaniesExtraController@getTickets', 			'as' => 'user.client_companies.get_tickets']);
	// Route::get('/clients/companies/clients/{id}', 		['uses' => 'CompaniesExtraController@getClients', 			'as' => 'user.client_companies.get_clients']);
	// Route::post('/clients/companies/vip/{id}', 			['uses' => 'CompaniesExtraController@getVip', 				'as' => 'user.client_companies.get_vip']);
	// Route::post('/clients/companies/new-client/{id}', 	['uses' => 'CompaniesExtraController@newClientJson', 		'as' => 'user.client_companies.new_client_json']);
	// Route::post('/clients/companies/get-client-name', 	['uses' => 'CompaniesExtraController@getClientNameByEmail', 'as' => 'user.client_companies.get_client_name)']);


	// Route::post('/create/comment', 			['uses' => 'Clients\clientController@apiCreateComment', 		'as' => 'user.api.ticket']);
	// Route::any('/client', 		  			['uses' => 'Clients\clientController@apiGetClient',	 		'as' => 'user.api.manual']);
	// Route::any('/clients', 		  			['uses' => 'Clients\clientController@apiClients', 				'as' => 'user.api.manual']);
	// Route::post('/update/client', 			['uses' => 'Clients\clientController@apiEditClient']);
});
