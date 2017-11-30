<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

	$api->get('/',             							['uses' => 'DashboardController@getIndex', 					'as' => 'user.dashboard.get_index']);
	//home //search
	$api->get('/', 										['uses' => 'searchController@apiManual', 					'as' => 'user.api.manual']);
	$api->get('/search', 		 						['uses' => 'searchController@getIndex', 					'as' => 'user.search.get_index']);
	$api->get('/search/{type}', 						['uses' => 'searchController@getDetails', 					'as' => 'user.search.get_details']);
	//chat
	$api->get('/chat/closeBrowser',                		['uses' => 'ChatApiController@closeBrowser',       			'as' => 'user.chat.close.browser']);
	$api->get('/chat/{id?}',                       		['uses' => 'ChatApiController@adminChat',           		'as' => 'user.admin.chat']);
	//tags
	$api->get('/tags',                 					['uses' => 'TagsController@getIndex',               		'as' => 'user.tags.get_index']);
	//news
	$api->get('/system-updates',     					['uses' => 'permission/SystemUpdatesController@getIndex', 	'as' => 'user.system_updates.get_index']);

	$api->any('/info/messengerstexts', 					['uses' => 'DashboardController@getMessengerInfo']);

	
	$api->any('/uapi/ok', 												['uses' => 'WebhookController@index']);
	$api->any('/uapi/response', 										['uses' => 'GapiController@apiResponse', 			'as' => 'user.telephony']);
	$api->any('/uapi/test', 											['uses' => 'otherController@apiTest', 				'as' => 'user.api.manual']);
	$api->post('/user/chat/setStatus', 									['uses' => 'UsersController@setChatUserStatus',		'as' => 'user.set.status']);
	$api->post('/voice-to-text', 										['uses' => 'GapiController@postVoiceToText',  		'as' => 'user.gapi.post_voice_to_text']);

	// $api->any('/back-3ds',       										['uses' => 'web/GapiController@postBack3ds', 		'as' => 'user.gapi.post_back_3ds']);


	// $api->get('/settings/monitoring', 									['uses' => 'web/MonitoringController@getSettings', 		'as' => 'user.smonitoring.get_settings']);
	// $api->post('/settings/monitoring', 								['uses' => 'web/MonitoringController@postSettings', 	'as' => 'user.smonitoring.post_settings']);
	// $api->post('/settings/monitoring/deleteClass/{id}', 				['uses' => 'web/MonitoringController@postDeleteClass', 	'as' => 'user.smonitoring.post_delete_class']);
	// $api->post('/settings/monitoring/deleteWord/{id}', 				['uses' => 'web/MonitoringController@postDeleteKeyword','as' => 'user.smonitoring.postDeleteKeyword']);
	// $api->get('/monitoring/clear', 									['uses' => 'web/MonitoringController@clear', 			'as' => 'user.monitoring.clear']);
	// $api->get('/monitoring/{type?}', 									['uses' => 'web/MonitoringController@getIndex', 		'as' => 'user.monitoring.get_index']);
	// $api->post('/monitoring/process', 									['uses' => 'web/MonitoringController@process', 			'as' => 'user.monitoring.process']);
});
