<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    /* ================== blocks ================== */

	$api->get('/widget.js',            		['uses' => 'apiController@getWidget', 							'as' => 'user.widget.get_widget']);
	$api->get('/chat.js',              		['uses' => 'apiController@getWidget', 							'as' => 'user.widget.get_chat_widget']);
	$api->get('/chat/ticket/{id}',          ['uses' => 'chatController@getTicket',           				'as' => 'chat.get.ticket']);
	$api->post('/widget.js/post',      		['uses' => 'apiController@postWidget', 							'as' => 'user.widget.post_widget']);
	$api->post('/chat/initChat',            ['uses' => 'chatController@initChat']);
	$api->post('/chat/disconnectChat',      ['uses' => 'chatController@disconnectChat']);
	$api->post('/chat/setEmail',            ['uses' => 'chatController@setEmail']);
	$api->post('/chat/addMessage',          ['uses' => 'chatController@addMessage']);
	$api->post('/chat/getChatMessages',     ['uses' => 'chatController@getChatMessages']);
	$api->post('/chat/initOperator',        ['uses' => 'chatController@initOperator']);
	$api->post('/chat/disconnectOperator',  ['uses' => 'chatController@disconnectOperator']);
	$api->post('/chat/getMessagesByChat',   ['uses' => 'chatController@getMessagesByChat',   				'as' => 'chat.get.messages']);
	$api->post('/chat/getActiveChat',       ['uses' => 'chatController@getActiveChat',       				'as' => 'chat.get.active']);
	$api->post('/chat/closeDialog',         ['uses' => 'chatController@closeDialog',         				'as' => 'chat.close.dialog']);
	$api->post('/chat/callback',            ['uses' => 'chatController@callback']);			
	$api->post('/chat/assignee',            ['uses' => 'chatController@AssigneeDialog',      				'as' => 'chat.assignee']);
	$api->post('/chat/assigneeJson',        ['uses' => 'chatController@getAssigneeJson',     				'as' => 'chat.assignee.json']);
	$api->post('/chat/replaceVar',          ['uses' => 'chatController@replaceVar',          				'as' => 'chat.replace.var']);
	$api->post('/chat/getUrl',              ['uses' => 'chatController@getUrl',              				'as' => 'chat.get.url']);
	$api->post('/chat/pushAction',          ['uses' => 'chatController@pushAction']);		
	$api->post('/chat/getProperties',       ['uses' => 'chatController@getChatProperties',   				'as' => 'user.chat.properties']);
	$api->post('/chat/browser/getHtml',     ['uses' => 'chatController@getHtml',             				'as' => 'user.chat.browser.html']);


	$api->post('/chat/getClientByChat',     ['uses' => 'chatController@getClientByChat',     				'as' => 'chat.get.client']);
	$api->post('/chat/getClientInfoView',   ['uses' => 'chatController@getClientInfoView',   				'as' => 'chat.get.client.info']);

    /* ================== check ================== */

	$api->post('/chat/checkChat',           ['uses' => 'chatController@checkChat']);
	$api->post('/chat/check/operatorStatus',['uses' => 'chatController@checkOperatorStatusAjax',			'as' => 'user.chat.check.operator.status']);
	$api->post('/chat/checkTicketStatus',   ['uses' => 'chatController@checkTicketStatus',   				'as' => 'chat.check.status']);
	$api->post('/chat/checkCobrowsingToken',['uses' => 'chatController@checkCobrowsingToken']);		
	$api->post('/chat/checkCobrowsingChat', ['uses' => 'chatController@checkCobrowsingChat']);		

    /* ================== macros ================== */

	$api->post('/chat/getMacrosesJson',     ['uses' => 'chatController@getMacrosesJson',     				'as' => 'chat.macros.json']);
	$api->post('/chat/runMacroses',         ['uses' => 'chatController@runMacroses',         				'as' => 'chat.run.macros']);
	$api->post('/chat/saveQuickMacros',   	['uses' => 'MacrosesController@chatSaveQuickMacros',  			'as' => 'channel.ajax.chat.save.macros']);
	$api->post('/chat/deleteQuickMacros', 	['uses' => 'MacrosesController@chatDeleteQuickMacros',			'as' => 'channel.ajax.chat.delete.macros']);

});

// $api->middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::group(['domain' => Config::get('app.api_domain') . '.' . Config::get('app.domain')], $apiRoutes);
// Route::group(['domain' => Config::get('app.zaim_domain') . '.' . Config::get('app.domain')],$apiRoutes);
// Route::group(['domain' => Config::get('app.secure_domain') . '.' . Config::get('app.domain'), 'prefix'=>'uapi'],$apiRoutes);