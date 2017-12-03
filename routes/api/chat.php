<?php

Route::prefix('api')->group(function () {

    /* ================== blocks ================== */

	Route::get('/widget.js',            	 ['uses' => 'chatController@getWidget', 							'as' => 'user.widget.get_widget']);
	Route::get('/chat.js',              	 ['uses' => 'chatController@getWidget', 							'as' => 'user.widget.get_chat_widget']);
	Route::get('/chat/ticket/{id}',          ['uses' => 'chatController@getTicket',           					'as' => 'chat.get.ticket']);
	Route::post('/widget.js/post',      	 ['uses' => 'chatController@postWidget', 							'as' => 'user.widget.post_widget']);
	Route::post('/chat/initChat',            ['uses' => 'chatController@initChat']);
	Route::post('/chat/disconnectChat',      ['uses' => 'chatController@disconnectChat']);
	Route::post('/chat/setEmail',            ['uses' => 'chatController@setEmail']);
	Route::post('/chat/addMessage',          ['uses' => 'chatController@addMessage']);
	Route::post('/chat/getChatMessages',     ['uses' => 'chatController@getChatMessages']);
	Route::post('/chat/initOperator',        ['uses' => 'chatController@initOperator']);
	Route::post('/chat/disconnectOperator',  ['uses' => 'chatController@disconnectOperator']);
	Route::post('/chat/getMessagesByChat',   ['uses' => 'chatController@getMessagesByChat',   				'as' => 'chat.get.messages']);
	Route::post('/chat/getActiveChat',       ['uses' => 'chatController@getActiveChat',       				'as' => 'chat.get.active']);
	Route::post('/chat/closeDialog',         ['uses' => 'chatController@closeDialog',         				'as' => 'chat.close.dialog']);
	Route::post('/chat/callback',            ['uses' => 'chatController@callback']);			
	Route::post('/chat/assignee',            ['uses' => 'chatController@AssigneeDialog',      				'as' => 'chat.assignee']);
	Route::post('/chat/assigneeJson',        ['uses' => 'chatController@getAssigneeJson',     				'as' => 'chat.assignee.json']);
	Route::post('/chat/replaceVar',          ['uses' => 'chatController@replaceVar',          				'as' => 'chat.replace.var']);
	Route::post('/chat/getUrl',              ['uses' => 'chatController@getUrl',              				'as' => 'chat.get.url']);
	Route::post('/chat/pushAction',          ['uses' => 'chatController@pushAction']);		
	Route::post('/chat/getProperties',       ['uses' => 'chatController@getChatProperties',   				'as' => 'user.chat.properties']);
	Route::post('/chat/browser/getHtml',     ['uses' => 'chatController@getHtml',             				'as' => 'user.chat.browser.html']);


	Route::post('/chat/getClientByChat',     ['uses' => 'chatController@getClientByChat',     				'as' => 'chat.get.client']);
	Route::post('/chat/getClientInfoView',   ['uses' => 'chatController@getClientInfoView',   				'as' => 'chat.get.client.info']);

    /* ================== check ================== */

	Route::post('/chat/checkChat',           ['uses' => 'chatController@checkChat']);
	Route::post('/chat/check/operatorStatus',['uses' => 'chatController@checkOperatorStatusAjax',			'as' => 'user.chat.check.operator.status']);
	Route::post('/chat/checkTicketStatus',   ['uses' => 'chatController@checkTicketStatus',   				'as' => 'chat.check.status']);
	Route::post('/chat/checkCobrowsingToken',['uses' => 'chatController@checkCobrowsingToken']);		
	Route::post('/chat/checkCobrowsingChat', ['uses' => 'chatController@checkCobrowsingChat']);		

    /* ================== macros ================== */

	Route::post('/chat/getMacrosesJson',     ['uses' => 'chatController@getMacrosesJson',     				'as' => 'chat.macros.json']);
	Route::post('/chat/runMacroses',         ['uses' => 'chatController@runMacroses',         				'as' => 'chat.run.macros']);
	Route::post('/chat/saveQuickMacros',   	 ['uses' => 'MacrosesController@chatSaveQuickMacros',  			'as' => 'channel.ajax.chat.save.macros']);
	Route::post('/chat/deleteQuickMacros', 	 ['uses' => 'MacrosesController@chatDeleteQuickMacros',			'as' => 'channel.ajax.chat.delete.macros']);

});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::group(['domain' => Config::get('app.api_domain') . '.' . Config::get('app.domain')], $apiRoutes);
// Route::group(['domain' => Config::get('app.zaim_domain') . '.' . Config::get('app.domain')],$apiRoutes);
// Route::group(['domain' => Config::get('app.secure_domain') . '.' . Config::get('app.domain'), 'prefix'=>'uapi'],$apiRoutes);