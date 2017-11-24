<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('test', 		['uses' => 'App\Http\Controllers\TestController@index', 'as' => 'test']);
	$api->get('test/{id}',  ['uses' => 'App\Http\Controllers\TestController@show',  'as' => 'test2']);
});
