<?php

use Illuminate\Http\Request;

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	$api->get('test', 		['uses' => 'App\Http\Controllers\Web\TestController@index', 'as' => 'test']);
	$api->get('test/{id}',  ['uses' => 'App\Http\Controllers\Web\TestController@show',  'as' => 'test2']);
});