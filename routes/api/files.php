<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
		
	$api->get('files/{company_id}/get-ticket-files', 						['uses' => 'filesController@getAllTicketAttachments', 			'as' => 'files.tickets.get_all_files']);
	$api->get('files/{company_id}/{ticket_id}/get-comment-files', 			['uses' => 'filesController@getAllTicketCommentAttachments', 	'as' => 'files.tickets.get_comment_files']);
	$api->get('files/{company_id}/{ticket_id}/get-chat-comment-files',		['uses' => 'filesController@getChatCommentAttachment', 			'as' => 'files.tickets.get_chat_comment_files']);
	$api->get('files/tickets/download-file/{id}',       					['uses' => 'filesController@getDownloadFile',       			'as' => 'user.tickets.get_download_file']);
	$api->get('files/tickets/chat-file/{id}', 								['uses' => 'filesController@getDownloadFile', 					'as' => 'user.tickets.get_chat_file']);
	$api->get('files/triggers/download-action-file/{id}', 					['uses' => 'filesController@downloadActionFile', 				'as' => 'user.triggers.get_download_action_file']);
	$api->get('files/triggers/delete-all-action-files/{action_id}', 		['uses' => 'filesController@deleteAllActionFiles', 				'as' => 'user.triggers.get_delete_all_action_files']);
	$api->get('files/macroses/download-file/{id}', 							['uses' => 'filesController@getDownloadFile', 					'as' => 'user.macroses.get_download_file']);
	$api->get('files/clients/delete-avatar/{id}', 							['uses' => 'filesController@getDeleteAvatar', 					'as' => 'user.clients.get_delete_avatar']);

	$api->post('files/upload-image',  										['uses' => 'filesController@postUploadImage',  					'as' => 'user.gapi.post_upload_image']);

});







