<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\Users as UserResource;
use App\Http\Resources\User\UserCollection;
use App\Models\User;
use App\Jobs\TestJob;

use Dingo\Api\Routing\Helpers;

class TestController extends Controller 
{
	use Helpers;

	public function index()
	{
		$users = User::all();

		return new UserCollection($users);
	}
	
	public function show($id)
	{
		$user = User::find($id);
		if(!$user) {
			return $this->response->errorNotFound();
		}
		return new UserResource($user);
	}

	public function store(Request $request)
	{
        // $payload = app('request')->only('username', 'password');

        // $validator = app('validator')->make($payload, $rules);

        // if ($validator->fails()) {
        //     throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new user.', $validator->errors());
        // }

        // Create user as per usual.
	}
}