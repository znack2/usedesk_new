<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	//filter
	$api->post('/tickets/save-filter',             						['uses' => 'TicketsController@postSaveFilter',        					'as' => 'user.tickets.post_save_filter']);
	$api->post('/tickets/edit-filter/{id}',        						['uses' => 'TicketsController@postEditFilter',        					'as' => 'user.tickets.post_edit_filter']);
	$api->get('/tickets/delete-filter/{id}',       						['uses' => 'TicketsController@getDeleteFilter',       					'as' => 'user.tickets.get_delete_filter']);
	$api->post('/tickets/filters/sort',            						['uses' => 'TicketsController@sortFilters',           					'as' => 'user.tickets.post_sort_filters']);
	$api->any('/tickets/get-filter-modal/{id}',    						['uses' => 'TicketsController@getFilterModal',        					'as' => 'user.tickets.get_filter_modal']);
	
	//multiedit	
	$api->post('/tickets/edit-multiple',           						['uses' => 'TicketsController@postEditMultiple',      					'as' => 'user.tickets.post_edit_multiple']);
	//comments	
	$api->post('/tickets/{id}/create-comment',     						['uses' => 'TicketsController@postCreateComment',     					'as' => 'user.tickets.post_create_comment']);
	//download	
	$api->get('/tickets/download-file/{id}',       						['uses' => 'TicketsController@getDownloadFile',       					'as' => 'user.tickets.get_download_file']);
	// $api->get('/tickets/chat-file/{id}', 							['uses' => 'TicketsController@getDownloadFile', 						'as' => 'user.tickets.get_chat_file']);
	//	
	$api->get('/tickets',                          						['uses' => 'TicketsController@getIndex',              					'as' => 'user.tickets.get_index']);
	$api->get('/tickets/list',                     						['uses' => 'TicketsController@getTickets',            					'as' => 'user.tickets.get_tickets']);
	$api->get('/tickets/tags-autocomplete',        						['uses' => 'TicketsController@getTagsOfCompany',      					'as' => 'user.tickets.get_tags_autocomplete']);
	$api->get('/tickets/tags-autocomplete-alt',    						['uses' => 'TicketsController@getTagsOfCompanyAlt',   					'as' => 'user.tickets.get_tags_autocomplete_alt']);
	$api->get('/tickets/get-saved-filters-from-cache', 					['uses' => 'TicketsController@getSavedFiltersFromCache',	 			'as' => 'user.tickets.get_saved_filters_from_cache']);
	$api->get('/tickets/get-ticket-count-for-saved-filters', 			['uses' => 'TicketsController@getTicketCountForSavedFilters', 			'as' => 'user.tickets.get_ticket_count_for_saved_filters']);
	$api->get('/tickets/client/get-list',          						['uses' => 'TicketsController@getClientList',         					'as' => 'user.tickets.get_client_list']);
	$api->any('/tickets/get/emails',               						['uses' => 'TicketsController@getUserEmails',         					'as' => 'user.tickets.get_user_email']);
	$api->post('/group/update',                    						['uses' => 'TicketsController@groupUpdate',           					'as' => 'user.tickets.group_update']);
	$api->post('/tickets/create',                  						['uses' => 'TicketsController@postCreate',            					'as' => 'user.tickets.post_create']);
	$api->post('/tickets/get-ticket-fields-content', 					['uses' => 'TicketsController@getTicketFieldsContent', 					'as' => 'user.tickets.get_ticket_fields_content']);
	$api->post('/tickets/save-reply-behavior',     						['uses' => 'TicketsController@postReplyBehavior',     					'as' => 'user.tickets.post_reply_behavior']);
	$api->post('/tickets/merge',                   						['uses' => 'TicketsController@postMerge',             					'as' => 'user.tickets.post_merge']);
	$api->post('/tickets/user-list-by-name',       						['uses' => 'TicketsController@postUserListByName',    					'as' => 'user.tickets.post_user_list_by_name']);
	$api->post('/tickets/user-list-by-text',       						['uses' => 'TicketsController@postUserListByText',    					'as' => 'user.tickets.post_user_list_by_text']);
	$api->post('/tickets/client/check-email',      						['uses' => 'TicketsController@postCheckEmail',        					'as' => 'user.tickets.post_check_email']);
	$api->post('/tickets/tags/top',                						['uses' => 'TicketsController@getTopTags',            					'as' => 'user.tickets.post_top_tags']);
	$api->get('/tickets/{id}',                     						['uses' => 'TicketsController@getDetails',            					'as' => 'user.tickets.get_details']);
	$api->post('/tickets/{id}/update-client',      						['uses' => 'TicketsController@postUpdateClient',      					'as' => 'user.tickets.post_update_client']);
	$api->get('/tickets/{id}/activity',            						['uses' => 'TicketsController@getActivity',           					'as' => 'user.tickets.get_activity']);
	$api->post('/tickets/edit/{id}',               						['uses' => 'TicketsController@postEdit',              					'as' => 'user.tickets.post_edit']);
	$api->any('/tickets/change-channel/{id}',      						['uses' => 'TicketsController@changeTicketChannel',   					'as' => 'user.tickets.change_ticket_channel']);
	$api->get('/tickets/create-it/{id}',           						['uses' => 'TicketsController@getCreateToIt',         					'as' => 'user.tickets.get_create_to_it']);
	$api->get('/tickets/create/{id?}',             						['uses' => 'TicketsController@getCreate',             					'as' => 'user.tickets.get_create']);
	$api->post('/tickets/get-prev-and-next/{id}',  						['uses' => 'TicketsController@getPrevAndNextTickets',  					'as' => 'user.tickets.get_prev_and_next']);
	$api->get('/tickets/client/{id}.json',         						['uses' => 'TicketsController@getClientJson',         					'as' => 'user.tickets.get_client_json']);
	$api->get('/tickets/macros-message/{id}.json', 						['uses' => 'TicketsController@getMacrosMessageJson',  					'as' => 'user.tickets.get_macros_message_json']);
	$api->post('/tickets/comments/quote/{id}',     						['uses' => 'TicketsController@getEmailQuote',         					'as' => 'user.tickets.get_email_quote']);


	$api->get('/files/{company_id}/get-ticket-files', 					['uses' => 'filesController@getAllTicketAttachments', 					'as' => 'files.tickets.get_all_files']);
	$api->get('/files/{company_id}/{ticket_id}/get-comment-files', 		['uses' => 'filesController@getAllTicketCommentAttachments', 			'as' => 'files.tickets.get_comment_files']);
	$api->get('/files/{company_id}/{ticket_id}/get-chat-comment-files',	['uses' => 'filesController@getChatCommentAttachment', 					'as' => 'files.tickets.get_chat_comment_files']);
});