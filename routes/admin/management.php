<?php


use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('/edit/greeting',  				['uses' => 'greetingsController@getGreeting',  		'as' => 'user.get.greeting']);
	$api->post('/edit/greeting', 				['uses' => 'greetingsController@postGreeting', 		'as' => 'user.post.greeting']);

	$api->get('/imap', 							['uses' => 'AdminsController@getImapTicket', 		'as' => 'admin.imap_ticket']);
	$api->get('/imap/read', 					['uses' => 'AdminsController@saveImapTickets', 		'as' => 'admin.imap_save']);
	$api->get('/imap/clear', 					['uses' => 'AdminsController@deleteImapTickets', 	'as' => 'admin.imap_delete']);
	$api->get('/imap/save/{id}', 				['uses' => 'AdminsController@saveImapTicket', 		'as' => 'admin.imap_save_by_id']);

	$api->get('/invoices', 						['uses' => 'InvoicesController@getIndex', 			'as' => 'admin.invoices.get_index']);
	$api->get('/invoices/{id}/document-copy', 	['uses' => 'InvoicesController@getDocumentCopy', 	'as' => 'admin.invoices.get_document_copy']);
	$api->get('/invoices/{id}/confirm', 		['uses' => 'InvoicesController@getConfirm', 		'as' => 'admin.invoices.get_confirm']);
	$api->get('/invoices/{id}/edit', 			['uses' => 'InvoicesController@getEdit', 			'as' => 'admin.invoices.get_edit']);
	$api->post('/invoices/{id}/edit', 			['uses' => 'InvoicesController@postEdit', 			'as' => 'admin.invoices.post_edit']);
	$api->get('/invoices/{id}/delete', 			['uses' => 'InvoicesController@getDelete', 			'as' => 'admin.invoices.get_delete']);

	$api->get('/mandrill', 						['uses' => 'AdminsController@getMandrillTicket', 	'as' => 'admin.mandrill_ticket']);
	$api->get('/mandrill/read', 				['uses' => 'AdminsController@saveMandrillTickets', 	'as' => 'admin.mandrill_save']);
	$api->get('/mandrill/clear', 				['uses' => 'AdminsController@deleteMandrillTickets','as' => 'admin.mandrill_delete']);
	$api->get('/mandrill/save/{id}', 			['uses' => 'AdminsController@saveMandrillTicket', 	'as' => 'admin.mandrill_save_by_id']);
			
	$api->get('/edit/manual', 					['uses' => 'ManualController@getManual', 			'as' => 'user.edit.manual']);
	$api->get('/delete/manual/{id}', 			['uses' => 'ManualController@deleteMethod', 		'as' => 'user.delete.method']);
	$api->get('/edit/manual/{id}', 				['uses' => 'ManualController@getMethod', 			'as' => 'user.get.method']);
	$api->get('/create/manual', 				['uses' => 'ManualController@getMethod', 			'as' => 'user.create.method']);
	$api->post('/create/manual', 				['uses' => 'ManualController@postEditMethod', 		'as' => 'user.create.method']);
	$api->post('/edit/manual/{id}', 			['uses' => 'ManualController@postEditMethod', 		'as' => 'user.edit.method']);
			
	$api->get('/system-updates', 				['uses' => 'SystemUpdatesController@getIndex', 		'as' => 'admin.system_updates.get_index']);
	$api->get('/system-updates/create', 		['uses' => 'SystemUpdatesController@getEdit', 		'as' => 'admin.system_updates.get_create']);
	$api->get('/system-updates/edit/{id}', 		['uses' => 'SystemUpdatesController@getEdit', 		'as' => 'admin.system_updates.get_edit']);
	$api->post('/system-updates/create', 		['uses' => 'SystemUpdatesController@postEdit', 		'as' => 'admin.system_updates.post_create']);
	$api->post('/system-updates/edit/{id}', 	['uses' => 'SystemUpdatesController@postEdit', 		'as' => 'admin.system_updates.post_edit']);
	$api->get('/system-updates/delete/{id}', 	['uses' => 'SystemUpdatesController@getDelete', 	'as' => 'admin.system_updates.get_delete']);
});

