<?php

Route::prefix('api')->group(function () {

	Route::get('/settings/channels/api', 						['uses' => 'ApiController@addApiClient', 							'as' => 'user.api_client']);
	Route::post('/settings/channels/api', 						['uses' => 'ApiController@postApiClient', 							'as' => 'user.post_api_client']);
	Route::get('/settings/channels/api/edit/{id}', 				['uses' => 'ApiController@editApiClient', 							'as' => 'user.edit_api_client']);
	Route::post('/settings/channels/api/edit/{id}', 			['uses' => 'ApiController@postEditApiClient', 						'as' => 'user.post_edit_api_client']);
	Route::get('/settings/channels/api/delete/{id}', 			['uses' => 'ApiController@deleteApiClient', 						'as' => 'user.delete_api_client']);
	Route::get('/settings/channels/api/update-secret/{id}', 	['uses' => 'ApiController@updateSecretApiClient', 					'as' => 'user.update_secret_api_client']);
		
	Route::get('/settings/channels', 							['uses' => 'ChannelsController@getIndex', 							'as' => 'user.company_email_channels.get_index']);
	Route::get('/settings/channels/create', 					['uses' => 'ChannelsController@getEdit', 							'as' => 'user.company_email_channels.get_create']);
	Route::get('/settings/channels/edit/{id}', 					['uses' => 'ChannelsController@getEdit', 							'as' => 'user.company_email_channels.get_edit']);
	Route::post('/settings/channels/create', 					['uses' => 'ChannelsController@postEdit', 							'as' => 'user.company_email_channels.post_create']);
	Route::post('/settings/channels/edit/{id}', 				['uses' => 'ChannelsController@postEdit', 							'as' => 'user.company_email_channels.post_edit']);
	Route::get('/settings/channels/delete/{id}', 				['uses' => 'ChannelsController@getDelete', 							'as' => 'user.company_email_channels.get_delete']);
	Route::post('/settings/channels/domain-test', 				['uses' => 'ChannelsController@postDomainTest', 					'as' => 'user.company_email_channels.post_domain_test']);
	Route::any('/v1/deleteChannel',    							['uses' => 'CompanyEmailChannelsController@ajaxDeleteChannel',		'as' => 'channel.ajax.delete.channel']);
	Route::any('/v1/getChannelTrigger',							['uses' => 'CompanyEmailChannelsController@getChannelTriggersJson',	'as' => 'channel.ajax.channel.triggers']);
	Route::any('/v1/getChannelMacros', 							['uses' => 'CompanyEmailChannelsController@getChannelMacrosJson',	'as' => 'channel.ajax.channel.macros']);



	Route::get('/settings/channels/chat', 						['uses' => 'ChatController@getChatSettings',						'as' => 'chat.get.settings']);
	Route::post('/settings/channels/chat', 						['uses' => 'ChatController@postChatSettings',						'as' => 'chat.post.settings']);

	Route::get('/settings/channels/widget', 					['uses' => 'WidgetController@getSettings', 							'as' => 'user.widget.get_settings']);
	Route::post('/settings/channels/widget/save', 				['uses' => 'WidgetController@postSettings', 						'as' => 'user.widget.post_settings']);
	Route::post('/settings/channels/widget/save-to-lib',		['uses' => 'WidgetController@saveFileToLib', 						'as' => 'user.widget.post_save_file_to_lib']);
	//whatshelp
	Route::get('/settings/channels/whatshelp', 					['uses' => 'WhatsHelpController@addWhatsHelpClient', 				'as' => 'user.whatshelp_client']);
	Route::post('/settings/channels/whatshelp', 				['uses' => 'WhatsHelpController@postWhatsHelpClient', 				'as' => 'user.post_whatshelp_client']);
	Route::get('/settings/channels/whatshelp/edit/{id}', 		['uses' => 'WhatsHelpController@editWhatsHelpClient', 				'as' => 'user.edit_whatshelp_client']);
	Route::post('/settings/channels/whatshelp/edit/{id}', 		['uses' => 'WhatsHelpController@postEditWhatsHelpClient', 			'as' => 'user.post_edit_whatshelp_client']);
	Route::post('/settings/channels/whatshelp/delete/{id}', 	['uses' => 'WhatsHelpController@deleteWhatsHelpClient', 			'as' => 'user.post_delete_whatshelp_client']);
	Route::any('/uapi/whatshelp/{id}', 							['uses' => 'WhatsHelpController@whatsHelp', 						'as'=>'user.whatshelp.webhook']);

	//telephony
	Route::get('/settings/channels/callcenter', 				['uses' => 'TelephonyController@addTelephonyClient', 				'as' => 'user.gravitel_client']);
	Route::post('/settings/channels/callcenter', 				['uses' => 'TelephonyController@postTelephonyClient', 				'as' => 'user.post_gravitel_client']);
	Route::get('/settings/channels/callcenter/edit/{id}', 		['uses' => 'TelephonyController@editTelephonyClient', 				'as' => 'user.edit_gravitel_client']);
	Route::get('/settings/channels/callcenter/delete/{id}', 	['uses' => 'TelephonyController@deleteTelephonyClient', 			'as' => 'user.delete_gravitel']);
	Route::post('/settings/channels/callcenter/edit/{id}', 		['uses' => 'TelephonyController@postEditTelephonyClient', 			'as' => 'user.post_edit_gravitel_client']);
	Route::get('/settings/channels/callcenter/key/{id}', 		['uses' => 'TelephonyController@updateKeyTelephonyClient', 			'as' => 'user.post_edit_gravitel_key']);
	//syncEngine
	Route::get('/settings/channels/sync/create/', 				['uses' => 'SyncEngineController@getEditSyncEngine', 				'as' => 'user.company_email_channels.get_create_sync_engine']);
	Route::post('/settings/channels/sync/create/', 				['uses' => 'SyncEngineController@postEditSyncEngine', 				'as' => 'user.company_email_channels.post_create_sync_engine']);
	Route::get('/settings/channels/sync/edit/{id}', 			['uses' => 'SyncEngineController@getEditSyncEngine', 				'as' => 'user.company_email_channels.get_edit_sync_engine']);
	Route::post('/settings/channels/sync/edit/{id}', 			['uses' => 'SyncEngineController@postEditSyncEngine', 				'as' => 'user.company_email_channels.post_edit_sync_engine']);
	Route::any('/v1/syncEngine',        						['uses' => 'SyncEngineController@syncEngine']);
	Route::any('/v1/syncEngine',        						['uses' => 'SyncEngineController@saveFromSyncEngine']);
	//jivosite
	Route::get('/settings/channels/jivosite/create', 			['uses' => 'jivositeController@getCreate', 							'as' => 'user.chat.get_create']);
	Route::post('settings/channels/jivosite/create', 			['uses' => 'jivositeController@postCreate', 						'as' => 'user.chat.post_create']);
	Route::post('settings/channels/jivosite/edit/{id}', 		['uses' => 'jivositeController@postEdit', 							'as' => 'user.chat.post_edit']);
	Route::post('/settings/channels/jivosite/webhook', 			['uses' => 'jivositeController@postWebhook', 						'as' => 'user.chat.post_webhook']);
	// Route::get('/settings/channels/jivosite', 					['uses' => 'jivositeController@getSettings', 					'as' => 'user.chat.get_settings']);
	// Route::get('settings/channels/jivosite/endpoint', 			['uses' => 'jivositeController@getEndpoint', 					'as' => 'user.chat.get_endpoint']);
	//zapier
	Route::get('/settings/channels/zapier', 					['uses' => 'AIController@getZappierSettings', 						'as' => 'user.get_zapier']);
	Route::post('/settings/channels/zapier', 					['uses' => 'AIController@postZappierSettings', 						'as' => 'user.post_zapier']);
	Route::any('/ai/response',          						['uses' => 'AIController@webhook', 									'as' => 'user.ai.webhook']);

	//fb
	Route::any('/fb/callback',         							['uses' => 'FbController@getFbCallback', 							'as' => 'user.fb.callback']);
	Route::get('/settings/channels/addFbChannel', 				['uses' => 'FbController@addFbChannel', 							'as' => 'user.company_email_channels.addFbChannel']);
	Route::get('/settings/channels/checkFbGroup/{id}', 			['uses' => 'FbController@checkFbGroup', 							'as' => 'user.company_email_channels.checkFbGroup']);
	Route::get('/settings/channels/createFbChannel', 			['uses' => 'FbController@createFbChannel', 							'as' => 'user.company_email_channels.createFbChannel']);
	//twitter
	Route::get('/settings/channels/addTwitterChannel', 			['uses' => 'TwitterController@addTwitterChannel',  					'as' => 'user.company_email_channels.addTwitterChannel']);
	Route::get('/settings/channels/createTwitterChannel', 		['uses' => 'TwitterController@createTwitterChannel',				'as' => 'user.company_email_channels.createTwitterChannel']);
	//vk
	Route::get('/settings/channels/vk-token-renew/{id}', 		['uses' => 'VkController@vkRenew', 									'as' => 'user.company_email_channels.vk_renew']);
	Route::get('/settings/channels/vk-token-renew-get-token/{id}',['uses' => 'VkController@vkRenewGetToken', 						'as' => 'user.company_email_channels.vk_renew_get_token']);
	Route::get('/settings/channels/addVkChannel', 				['uses' => 'VkController@addVkChannel', 							'as' => 'user.company_email_channels.addVkChannel']);
	Route::get('/settings/channels/createVkChannel', 			['uses' => 'VkController@createVkChannel', 							'as' => 'user.company_email_channels.createVkChannel']);
	Route::get('/settings/channels/createVkGroupChannel', 		['uses' => 'VkController@createVkGroupChannel',						'as' => 'user.company_email_channels.createVkGroupChannel']);
	Route::post('/settings/channels/vk/edit', 					['uses' => 'VkController@postEditVk', 								'as' => 'user.company_email_channels.post_edit_vk']);
	Route::post('/settings/channels/vk/edit/{id}', 				['uses' => 'VkController@postEditVk', 								'as' => 'user.company_email_channels.post_edit_vk']);
	Route::get('/settings/channels/vkLogout', 					['uses' => 'VkController@vkLogout', 								'as' => 'user.company_email_channels.vkLogout']);
	Route::any('/vk/callback/{id}',    							['uses' => 'VkController@getVkCallback', 							'as' => 'user.vk.callback']);
	Route::any('/vk/group-key/{id}',   							['uses' => 'VkController@getVkGroupKey', 							'as' => 'user.vk.group_key']);
	//google
	Route::get('/settings/channels/googleOauth', 				['uses' => 'GmailController@getGoogleOauth', 						'as' => 'user.company_email_channels.google_oauth']);
	Route::get('/settings/channels/gmail', 						['uses' => 'GmailController@getGmail', 								'as' => 'user.company_email_channels.gmail']);
	//zendesk
	Route::get('/settings/import', 								['uses' => 'ImportController@getIndex', 							'as' => 'user.import.get_index']);
	Route::get('/settings/import/zendesk/users', 				['uses' => 'ImportController@startZendeskImportUsers', 				'as' => 'user.import.zendesk.users']);
	Route::get('/settings/import/zendesk/companies', 			['uses' => 'ImportController@startZendeskImportCompanies', 			'as' => 'user.import.zendesk.companies']);
	Route::get('/settings/import/zendesk/tickets', 				['uses' => 'ImportController@startZendeskImportTickets', 			'as' => 'user.import.zendesk.tickets']);
	Route::post('/settings/import/zendesk', 					['uses' => 'ImportController@postZendeskImport', 					'as' => 'user.import.post_zendesk']);
	//mandrill
	Route::any('/v1/mandrill/status',   						['uses' => 'MandrillController@madrillStatus']);
	Route::any('/mandrill-inbound',         					['uses' => 'MandrillController@postMandrillInbound', 				'as' => 'user.gapi.post_mandrill_inbound']);
	Route::any('/mandrill-notifications',   					['uses' => 'MandrillController@postMandrillNotifications', 			'as' => 'user.gapi.post_mandrill_notifications']);
	//mongo
	// Route::any('/uapi/mango/{events}/{call}/{id}', 	['uses' => 'GapiController@mango']);
	// Route::any('/uapi/mango/{events}/{call}', 		['uses' => 'GapiController@mango']);
	// Route::any('/uapi/mango/{events}', 				['uses' => 'GapiController@mango']);


	Route::post('/blocks/payu', 				['uses' => 'Blocks\CustomController@getPayuBlock', 				'as' => 'user.company_custom_blocks.get_payu_block']);
	Route::post('/blocks/retail_crm', 			['uses' => 'Blocks\CustomController@getRetailCrmBlock', 		'as' => 'user.company_custom_blocks.get_retail_crm_block']);
});
