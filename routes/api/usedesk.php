<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('/widget.js',            		['uses' => 'apiController@getWidget', 					'as' => 'user.widget.get_widget']);
	$api->post('/widget.js/post',      		['uses' => 'apiController@postWidget', 					'as' => 'user.widget.post_widget']);
	$api->get('/chat.js',              		['uses' => 'apiController@getWidget', 					'as' => 'user.widget.get_chat_widget']);

	$api->any('/tickets', 					['uses' => 'ticketController@apiTickets', 				'as' => 'user.api.tickets']);
	$api->any('/ticket', 					['uses' => 'ticketController@apiGetTicket', 			'as' => 'user.api.ticket']);
	$api->post('/update/ticket', 			['uses' => 'ticketController@apiUpdateTicket', 			'as' => 'user.api.ticket']);
	$api->post('/create/ticket', 			['uses' => 'ticketController@apiCreateTicket', 			'as' => 'user.api.ticket']);
	$api->any('/ticket/fields', 			['uses' => 'ticketController@getСustomFieldList']);
	$api->post('/create/ticketsFromFile', 	['uses' => 'ticketController@apiTicketFromFile']);

	$api->post('/create/comment', 			['uses' => 'clientsController@apiCreateComment', 		'as' => 'user.api.ticket']);
	$api->any('/client', 		  			['uses' => 'clientsController@apiGetClient',	 		'as' => 'user.api.manual']);
	$api->any('/clients', 		  			['uses' => 'clientsController@apiClients', 				'as' => 'user.api.manual']);
	$api->post('/update/client', 			['uses' => 'clientsController@apiEditClient']);

	$api->any('/tags', 						['uses' => 'TagsController@apiTags']);
});


// $apiRoutes = function($route){};

// Route::group(['domain' => Config::get('app.api_domain') . '.' . Config::get('app.domain')], $apiRoutes);
// Route::group(['domain' => Config::get('app.zaim_domain') . '.' . Config::get('app.domain')],$apiRoutes);
// Route::group(['domain' => Config::get('app.secure_domain') . '.' . Config::get('app.domain'), 'prefix'=>'uapi'],$apiRoutes);