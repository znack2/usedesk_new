<?php

Route::prefix('api')->group(function () {

    /* ================== tickets ================== */

	Route::get('tickets',                          				['uses' => 'Tickets\TicketController@index',              						'as' => 'user.tickets.get_index']);
	Route::get('tickets/{id}',                     				['uses' => 'Tickets\TicketController@show',            							'as' => 'user.tickets.get_details']);
	Route::post('tickets/create',                  				['uses' => 'Tickets\TicketController@store',            						'as' => 'user.tickets.post_create']);
	Route::post('tickets/{id}',               					['uses' => 'Tickets\TicketController@update',              						'as' => 'user.tickets.post_edit']);
	Route::post('tickets/merge',                   				['uses' => 'Tickets\TicketController@merge',             						'as' => 'user.tickets.post_merge']);
	// Route::post('tickets/edit-multiple',           				['uses' => 'Tickets\TicketController@updateMultiple',      					'as' => 'user.tickets.post_edit_multiple']);
	// Route::post('tickets/get-prev-and-next/{id}',  				['uses' => 'Tickets\TicketController@getPrevAndNextTickets',  					'as' => 'user.tickets.get_prev_and_next']);
	// Route::post('tickets/{id}/update-client',      				['uses' => 'Tickets\TicketController@postUpdateClient',      					'as' => 'user.tickets.post_update_client']);
	// Route::post('tickets/save-reply-behavior',     				['uses' => 'Tickets\TicketController@postReplyBehavior',     					'as' => 'user.tickets.post_reply_behavior']);

/* ================== additional field ================== */

	Route::get('/ticket-fields', 							['uses' => 'Tickets\TicketFieldController@index', 							'as' => 'user.ticket_fields.get_index']);
	Route::get('/ticket-fields/{id}', 						['uses' => 'Tickets\TicketFieldController@show', 							'as' => 'user.ticket_fields.get_index']);
	Route::post('/ticket-fields/tickets/{type}', 			['uses' => 'Tickets\TicketFieldController@store', 							'as' => 'user.ticket_fields.tickets.get_edit']);
	Route::put('/ticket-fields/tickets', 					['uses' => 'Tickets\TicketFieldController@update', 							'as' => 'user.ticket_fields.tickets.post_edit']);
	Route::delete('/ticket-fields/tickets/{id}', 			['uses' => 'Tickets\TicketFieldController@destroy', 						'as' => 'user.ticket_fields.tickets.get_delete']);
	Route::post('/ticket-fields/tickets/enable',   			['uses' => 'Tickets\TicketFieldController@toggleEnable', 					'as' => 'user.ticket_fields.tickets.get_enable']);

    /* ================== filter ================== */

	// Route::post('tickets/save-filter',             				['uses' => 'Tickets\TicketsFilterController@store',        						'as' => 'user.tickets.post_save_filter']);
	// Route::put('tickets/{id}',        							['uses' => 'Tickets\TicketsFilterController@update',        					'as' => 'user.tickets.post_edit_filter']);
	// Route::delete('tickets/{id}',       							['uses' => 'Tickets\TicketsFilterController@destroy',       					'as' => 'user.tickets.get_delete_filter']);
	// Route::post('tickets/filters/sort',            				['uses' => 'Tickets\TicketsFilterController@sort',           					'as' => 'user.tickets.post_sort_filters']);
	// Route::any('tickets/get-filter-modal/{id}',    				['uses' => 'Tickets\TicketsFilterController@getFilterModal',        			'as' => 'user.tickets.get_filter_modal']);
	// Route::get('tickets/get-saved-filters-from-cache', 			['uses' => 'Tickets\TicketsFilterController@getSavedFiltersFromCache',	 		'as' => 'user.tickets.get_saved_filters_from_cache']);
	// Route::get('tickets/get-ticket-count-for-saved-filters', 	['uses' => 'Tickets\TicketsFilterController@getTicketCountForSavedFilters', 	'as' => 'user.tickets.get_ticket_count_for_saved_filters']);

    /* ================== tags ================== */

	// Route::get('tickets\tags-autocomplete',        				['uses' => 'Tickets\TicketsTagController@getTagsOfCompany',      				'as' => 'user.tickets.get_tags_autocomplete']);
	// Route::get('tickets\tags-autocomplete-alt',    				['uses' => 'Tickets\TicketsTagController@getTagsOfCompanyAlt',   				'as' => 'user.tickets.get_tags_autocomplete_alt']);
	// Route::post('tickets\tags/top',                				['uses' => 'Tickets\TicketsTagController@getTopTags',            				'as' => 'user.tickets.post_top_tags']);


    /* ================== comments ================== */

	// Route::post('tickets/{id}/create-comment',     				['uses' => 'Tickets\TicketsController@postCreateComment',     					'as' => 'user.tickets.post_create_comment']);
	// Route::post('tickets/comments/quote/{id}',     				['uses' => 'Tickets\TicketsController@getEmailQuote',         					'as' => 'user.tickets.get_email_quote']);





	// Route::get('tickets/list',                     				['uses' => 'Tickets\TicketsController@getTickets',            					'as' => 'user.tickets.get_tickets']);
	// Route::get('tickets/client/get-list',          				['uses' => 'Tickets\TicketsController@getClientList',         					'as' => 'user.tickets.get_client_list']);
	// Route::any('tickets/get/emails',               				['uses' => 'Tickets\TicketsController@getUserEmails',         					'as' => 'user.tickets.get_user_email']);
	// Route::post('/group/update',                    			['uses' => 'Tickets\TicketsController@groupUpdate',           					'as' => 'user.tickets.group_update']);
	// Route::post('tickets/get-ticket-fields-content', 			['uses' => 'Tickets\TicketsController@getTicketFieldsContent', 					'as' => 'user.tickets.get_ticket_fields_content']);
	// Route::post('tickets/user-list-by-name',       				['uses' => 'Tickets\TicketsController@postUserListByName',    					'as' => 'user.tickets.post_user_list_by_name']);
	// Route::post('tickets/user-list-by-text',       				['uses' => 'Tickets\TicketsController@postUserListByText',    					'as' => 'user.tickets.post_user_list_by_text']);
	// Route::post('tickets/client/check-email',      				['uses' => 'Tickets\TicketsController@postCheckEmail',        					'as' => 'user.tickets.post_check_email']);
	// Route::get('tickets/{id}/activity',            				['uses' => 'Tickets\TicketsController@getActivity',           					'as' => 'user.tickets.get_activity']);
	// Route::any('tickets/change-channel/{id}',      				['uses' => 'Tickets\TicketsController@changeTicketChannel',   					'as' => 'user.tickets.change_ticket_channel']);
	// Route::get('tickets/create-it/{id}',           				['uses' => 'Tickets\TicketsController@getCreateToIt',         					'as' => 'user.tickets.get_create_to_it']);
	// Route::get('tickets/client/{id}.json',         				['uses' => 'Tickets\TicketsController@getClientJson',         					'as' => 'user.tickets.get_client_json']);
	// Route::get('tickets/macros-message/{id}.json', 				['uses' => 'Tickets\TicketsController@getMacrosMessageJson',  					'as' => 'user.tickets.get_macros_message_json']);



	// Route::any('/tickets', 					['uses' => 'ticketController@apiTickets', 				'as' => 'user.api.tickets']);
	// Route::any('/ticket', 					['uses' => 'ticketController@apiGetTicket', 			'as' => 'user.api.ticket']);
	// Route::post('/update/ticket', 			['uses' => 'ticketController@apiUpdateTicket', 			'as' => 'user.api.ticket']);
	// Route::post('/create/ticket', 			['uses' => 'ticketController@apiCreateTicket', 			'as' => 'user.api.ticket']);
	// Route::any('/ticket/fields', 			['uses' => 'ticketController@getСustomFieldList']);
	// Route::post('/create/ticketsFromFile', 	['uses' => 'ticketController@apiTicketFromFile']);

	
	// Route::any('/tags', 						['uses' => 'TagsController@apiTags']);

});