<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('/',             							['uses' => 'DashboardController@getIndex', 					'as' => 'user.dashboard.get_index']);
	//home //search
	$api->get('/', 										['uses' => 'searchController@apiManual', 					'as' => 'user.api.manual']);
	$api->get('/search', 		 						['uses' => 'searchController@getIndex', 					'as' => 'user.search.get_index']);
	$api->get('/search/{type}', 						['uses' => 'searchController@getDetails', 					'as' => 'user.search.get_details']);
	//profile
	$api->post('/profile/save', ['before' => 'csrf',	'uses' =>  'profileController@postSave', 					'as' => 'user.profile.post_save']);
	$api->get('/profile', 								['uses' => 'profileController@getIndex', 					'as' => 'user.profile.get_index']);
	$api->get('/profile/delete-avatar', 				['uses' => 'profileController@getDeleteAvatar', 			'as' => 'user.profile.get_delete_avatar']);
	$api->post('/profile/save-notification', 			['uses' => 'profileController@postSaveNotification', 		'as' => 'user.profile.post_save_notification']);
	//chat
	$api->get('/chat/closeBrowser',                		['uses' => 'ChatApiController@closeBrowser',       			'as' => 'user.chat.close.browser']);
	$api->get('/chat/{id?}',                       		['uses' => 'ChatApiController@adminChat',           		'as' => 'user.admin.chat']);
	//tags
	$api->get('/tags',                 					['uses' => 'TagsController@getIndex',               		'as' => 'user.tags.get_index']);
	//integration
	$api->get('/settings/integration', 					['uses' => 'IntegrationController@getIndex', 				'as' => 'user.integration.get_index']);
	$api->post('/settings/integration/change-status', 	['uses' => 'IntegrationController@postChangeStatus',		'as' => 'user.integration.post_change_status']);
	//get started
	$api->get('/get-started',        					['uses' => 'GetStartedController@getIndex', 				'as' => 'user.get_started.get_index']);
	$api->get('/get-started/close',  					['uses' => 'GetStartedController@getClose', 				'as' => 'user.get_started.close']);
	//news
	$api->get('/system-updates',     					['uses' => 'permission/SystemUpdatesController@getIndex', 	'as' => 'user.system_updates.get_index']);

	$api->any('/info/messengerstexts', 					['uses' => 'DashboardController@getMessengerInfo']);
});
