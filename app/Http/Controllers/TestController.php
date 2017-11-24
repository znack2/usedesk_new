<?php

// Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException	403
// Symfony\Component\HttpKernel\Exception\BadRequestHttpException	400
// Symfony\Component\HttpKernel\Exception\ConflictHttpException	409
// Symfony\Component\HttpKernel\Exception\GoneHttpException	410
// Symfony\Component\HttpKernel\Exception\HttpException	500
// Symfony\Component\HttpKernel\Exception\LengthRequiredHttpException	411
// Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException	405
// Symfony\Component\HttpKernel\Exception\NotAcceptableHttpException	406
// Symfony\Component\HttpKernel\Exception\NotFoundHttpException	404
// Symfony\Component\HttpKernel\Exception\PreconditionFailedHttpException	412
// Symfony\Component\HttpKernel\Exception\PreconditionRequiredHttpException	428
// Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException	503
// Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException	429
// Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException	401
// Symfony\Component\HttpKernel\Exception\UnsupportedMediaTypeHttpException	415

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Resources\Users as UserResource;
use App\Http\Resources\UserCollection;
use App\Models\User
use App\Jobs\TestJob

// use Dingo\Api\Routing\Helpers;

/**
 * User resource representation.
 *
 * @Resource("Users", uri="/users")
 */
class TestController extends Controller 
{
	// use Helpers;

	public function test()
	{
		return ['hello'=>'1'];

		//monitoring by tag
		$tag = User::first(1);
		TestJob::dispatch($tag); 
	}
	/**
	 * Show all users
	 *
	 * Get a JSON representation of all the registered users.
	 *
	 * @Get("/{?page,limit}")
	 * @Versions({"v1"})
	 * @Parameters({
	 *      @Parameter("page", description="The page of results to view.", default=1),
	 *      @Parameter("limit", description="The amount of results per page.", default=10)
	 * })
	 */
	public function index()
	{
		$users = User::all();

		 return new UserCollection($users);

		// return $this->response
		// 			->collection($users, new UserTransformer);
	}
	
	public function show($id)
	{
		$user = User::findOrFail($id);

		return new UserResource($user);

		// return $this->response
		// 			->item($user, new UserTransformer);
	}
	/**
	 * Register user
	 *
	 * Register a new user with a `username` and `password`.
	 *
	 * @Post("/")
	 * @Versions({"v1"})
	 * @Transaction({
	 *      @Request({"username": "foo", "password": "bar"}),
	 *      @Response(200, body={"id": 10, "username": "foo"}),
	 *      @Response(422, body={"error": {"username": {"Username is already taken."}}})
	 * })
	 */
	public function store()
	{
		$rules = [
            'username' => ['required', 'alpha'],
            'password' => ['required', 'min:7']
        ];

        $payload = app('request')->only('username', 'password');

        $validator = app('validator')->make($payload, $rules);

        if ($validator->fails()) {
            throw new Dingo\Api\Exception\StoreResourceFailedException('Could not create new user.', $validator->errors());
        }

        // Create user as per usual.
	}
}