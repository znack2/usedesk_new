<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	$api->get('/settings/channels/api', 						['uses' => 'ApiController@addApiClient', 							'as' => 'user.api_client']);
	$api->post('/settings/channels/api', 						['uses' => 'ApiController@postApiClient', 							'as' => 'user.post_api_client']);
	$api->get('/settings/channels/api/edit/{id}', 				['uses' => 'ApiController@editApiClient', 							'as' => 'user.edit_api_client']);
	$api->post('/settings/channels/api/edit/{id}', 				['uses' => 'ApiController@postEditApiClient', 						'as' => 'user.post_edit_api_client']);
	$api->get('/settings/channels/api/delete/{id}', 			['uses' => 'ApiController@deleteApiClient', 						'as' => 'user.delete_api_client']);
	$api->get('/settings/channels/api/update-secret/{id}', 		['uses' => 'ApiController@updateSecretApiClient', 					'as' => 'user.update_secret_api_client']);
		
	$api->get('/settings/channels', 							['uses' => 'ChannelsController@getIndex', 							'as' => 'user.company_email_channels.get_index']);
	$api->get('/settings/channels/create', 						['uses' => 'ChannelsController@getEdit', 							'as' => 'user.company_email_channels.get_create']);
	$api->get('/settings/channels/edit/{id}', 					['uses' => 'ChannelsController@getEdit', 							'as' => 'user.company_email_channels.get_edit']);
	$api->post('/settings/channels/create', 					['uses' => 'ChannelsController@postEdit', 							'as' => 'user.company_email_channels.post_create']);
	$api->post('/settings/channels/edit/{id}', 					['uses' => 'ChannelsController@postEdit', 							'as' => 'user.company_email_channels.post_edit']);
	$api->get('/settings/channels/delete/{id}', 				['uses' => 'ChannelsController@getDelete', 							'as' => 'user.company_email_channels.get_delete']);
	$api->post('/settings/channels/domain-test', 				['uses' => 'ChannelsController@postDomainTest', 					'as' => 'user.company_email_channels.post_domain_test']);
	$api->any('/v1/deleteChannel',    							['uses' => 'CompanyEmailChannelsController@ajaxDeleteChannel',		'as' => 'channel.ajax.delete.channel']);
	$api->any('/v1/getChannelTrigger',							['uses' => 'CompanyEmailChannelsController@getChannelTriggersJson',	'as' => 'channel.ajax.channel.triggers']);
	$api->any('/v1/getChannelMacros', 							['uses' => 'CompanyEmailChannelsController@getChannelMacrosJson',	'as' => 'channel.ajax.channel.macros']);



	$api->get('/settings/channels/chat', 						['uses' => 'ChatController@getChatSettings',						'as' => 'chat.get.settings']);
	$api->post('/settings/channels/chat', 						['uses' => 'ChatController@postChatSettings',						'as' => 'chat.post.settings']);

	$api->get('/settings/channels/widget', 						['uses' => 'WidgetController@getSettings', 							'as' => 'user.widget.get_settings']);
	$api->post('/settings/channels/widget/save', 				['uses' => 'WidgetController@postSettings', 						'as' => 'user.widget.post_settings']);
	$api->post('/settings/channels/widget/save-to-lib',			['uses' => 'WidgetController@saveFileToLib', 						'as' => 'user.widget.post_save_file_to_lib']);
	//whatshelp
	$api->get('/settings/channels/whatshelp', 					['uses' => 'WhatsHelpController@addWhatsHelpClient', 				'as' => 'user.whatshelp_client']);
	$api->post('/settings/channels/whatshelp', 					['uses' => 'WhatsHelpController@postWhatsHelpClient', 				'as' => 'user.post_whatshelp_client']);
	$api->get('/settings/channels/whatshelp/edit/{id}', 		['uses' => 'WhatsHelpController@editWhatsHelpClient', 				'as' => 'user.edit_whatshelp_client']);
	$api->post('/settings/channels/whatshelp/edit/{id}', 		['uses' => 'WhatsHelpController@postEditWhatsHelpClient', 			'as' => 'user.post_edit_whatshelp_client']);
	$api->post('/settings/channels/whatshelp/delete/{id}', 		['uses' => 'WhatsHelpController@deleteWhatsHelpClient', 			'as' => 'user.post_delete_whatshelp_client']);
	$api->any('/uapi/whatshelp/{id}', 							['uses' => 'WhatsHelpController@whatsHelp', 						'as'=>'user.whatshelp.webhook']);

	//telephony
	$api->get('/settings/channels/callcenter', 					['uses' => 'TelephonyController@addTelephonyClient', 				'as' => 'user.gravitel_client']);
	$api->post('/settings/channels/callcenter', 				['uses' => 'TelephonyController@postTelephonyClient', 				'as' => 'user.post_gravitel_client']);
	$api->get('/settings/channels/callcenter/edit/{id}', 		['uses' => 'TelephonyController@editTelephonyClient', 				'as' => 'user.edit_gravitel_client']);
	$api->get('/settings/channels/callcenter/delete/{id}', 		['uses' => 'TelephonyController@deleteTelephonyClient', 			'as' => 'user.delete_gravitel']);
	$api->post('/settings/channels/callcenter/edit/{id}', 		['uses' => 'TelephonyController@postEditTelephonyClient', 			'as' => 'user.post_edit_gravitel_client']);
	$api->get('/settings/channels/callcenter/key/{id}', 		['uses' => 'TelephonyController@updateKeyTelephonyClient', 			'as' => 'user.post_edit_gravitel_key']);
	//syncEngine
	$api->get('/settings/channels/sync/create/', 				['uses' => 'SyncEngineController@getEditSyncEngine', 				'as' => 'user.company_email_channels.get_create_sync_engine']);
	$api->post('/settings/channels/sync/create/', 				['uses' => 'SyncEngineController@postEditSyncEngine', 				'as' => 'user.company_email_channels.post_create_sync_engine']);
	$api->get('/settings/channels/sync/edit/{id}', 				['uses' => 'SyncEngineController@getEditSyncEngine', 				'as' => 'user.company_email_channels.get_edit_sync_engine']);
	$api->post('/settings/channels/sync/edit/{id}', 			['uses' => 'SyncEngineController@postEditSyncEngine', 				'as' => 'user.company_email_channels.post_edit_sync_engine']);
	$api->any('/v1/syncEngine',        							['uses' => 'SyncEngineController@syncEngine']);
	$api->any('/v1/syncEngine',        							['uses' => 'SyncEngineController@saveFromSyncEngine']);
	//jivosite
	$api->get('/settings/channels/jivosite/create', 			['uses' => 'jivositeController@getCreate', 							'as' => 'user.chat.get_create']);
	$api->post('settings/channels/jivosite/create', 			['uses' => 'jivositeController@postCreate', 						'as' => 'user.chat.post_create']);
	$api->post('settings/channels/jivosite/edit/{id}', 			['uses' => 'jivositeController@postEdit', 							'as' => 'user.chat.post_edit']);
	$api->post('/settings/channels/jivosite/webhook', 			['uses' => 'jivositeController@postWebhook', 						'as' => 'user.chat.post_webhook']);
	// $api->get('/settings/channels/jivosite', 					['uses' => 'jivositeController@getSettings', 					'as' => 'user.chat.get_settings']);
	// $api->get('settings/channels/jivosite/endpoint', 			['uses' => 'jivositeController@getEndpoint', 					'as' => 'user.chat.get_endpoint']);
	//zapier
	$api->get('/settings/channels/zapier', 						['uses' => 'AIController@getZappierSettings', 						'as' => 'user.get_zapier']);
	$api->post('/settings/channels/zapier', 					['uses' => 'AIController@postZappierSettings', 						'as' => 'user.post_zapier']);
	$api->any('/ai/response',          							['uses' => 'AIController@webhook', 									'as' => 'user.ai.webhook']);

	//fb
	$api->any('/fb/callback',         							['uses' => 'FbController@getFbCallback', 							'as' => 'user.fb.callback']);
	$api->get('/settings/channels/addFbChannel', 				['uses' => 'FbController@addFbChannel', 							'as' => 'user.company_email_channels.addFbChannel']);
	$api->get('/settings/channels/checkFbGroup/{id}', 			['uses' => 'FbController@checkFbGroup', 							'as' => 'user.company_email_channels.checkFbGroup']);
	$api->get('/settings/channels/createFbChannel', 			['uses' => 'FbController@createFbChannel', 							'as' => 'user.company_email_channels.createFbChannel']);
	//twitter
	$api->get('/settings/channels/addTwitterChannel', 			['uses' => 'TwitterController@addTwitterChannel',  					'as' => 'user.company_email_channels.addTwitterChannel']);
	$api->get('/settings/channels/createTwitterChannel', 		['uses' => 'TwitterController@createTwitterChannel',				'as' => 'user.company_email_channels.createTwitterChannel']);
	//vk
	$api->get('/settings/channels/vk-token-renew/{id}', 		['uses' => 'VkController@vkRenew', 									'as' => 'user.company_email_channels.vk_renew']);
	$api->get('/settings/channels/vk-token-renew-get-token/{id}',['uses' => 'VkController@vkRenewGetToken', 						'as' => 'user.company_email_channels.vk_renew_get_token']);
	$api->get('/settings/channels/addVkChannel', 				['uses' => 'VkController@addVkChannel', 							'as' => 'user.company_email_channels.addVkChannel']);
	$api->get('/settings/channels/createVkChannel', 			['uses' => 'VkController@createVkChannel', 							'as' => 'user.company_email_channels.createVkChannel']);
	$api->get('/settings/channels/createVkGroupChannel', 		['uses' => 'VkController@createVkGroupChannel',						'as' => 'user.company_email_channels.createVkGroupChannel']);
	$api->post('/settings/channels/vk/edit', 					['uses' => 'VkController@postEditVk', 								'as' => 'user.company_email_channels.post_edit_vk']);
	$api->post('/settings/channels/vk/edit/{id}', 				['uses' => 'VkController@postEditVk', 								'as' => 'user.company_email_channels.post_edit_vk']);
	$api->get('/settings/channels/vkLogout', 					['uses' => 'VkController@vkLogout', 								'as' => 'user.company_email_channels.vkLogout']);
	$api->any('/vk/callback/{id}',    							['uses' => 'VkController@getVkCallback', 							'as' => 'user.vk.callback']);
	$api->any('/vk/group-key/{id}',   							['uses' => 'VkController@getVkGroupKey', 							'as' => 'user.vk.group_key']);
	//google
	$api->get('/settings/channels/googleOauth', 				['uses' => 'GmailController@getGoogleOauth', 						'as' => 'user.company_email_channels.google_oauth']);
	$api->get('/settings/channels/gmail', 						['uses' => 'GmailController@getGmail', 								'as' => 'user.company_email_channels.gmail']);
	//zendesk
	$api->get('/settings/import', 								['uses' => 'ImportController@getIndex', 							'as' => 'user.import.get_index']);
	$api->get('/settings/import/zendesk/users', 				['uses' => 'ImportController@startZendeskImportUsers', 				'as' => 'user.import.zendesk.users']);
	$api->get('/settings/import/zendesk/companies', 			['uses' => 'ImportController@startZendeskImportCompanies', 			'as' => 'user.import.zendesk.companies']);
	$api->get('/settings/import/zendesk/tickets', 				['uses' => 'ImportController@startZendeskImportTickets', 			'as' => 'user.import.zendesk.tickets']);
	$api->post('/settings/import/zendesk', 						['uses' => 'ImportController@postZendeskImport', 					'as' => 'user.import.post_zendesk']);
	//mandrill
	$api->any('/v1/mandrill/status',   							['uses' => 'MandrillController@madrillStatus']);
	$api->any('/mandrill-inbound',         						['uses' => 'MandrillController@postMandrillInbound', 				'as' => 'user.gapi.post_mandrill_inbound']);
	$api->any('/mandrill-notifications',   						['uses' => 'MandrillController@postMandrillNotifications', 			'as' => 'user.gapi.post_mandrill_notifications']);
	//mongo
	// $api->any('/uapi/mango/{events}/{call}/{id}', 	['uses' => 'GapiController@mango']);
	// $api->any('/uapi/mango/{events}/{call}', 		['uses' => 'GapiController@mango']);
	// $api->any('/uapi/mango/{events}', 				['uses' => 'GapiController@mango']);
});
