<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\UserRequest;
use App\Http\Resources\Settings\UserResource;
use App\Http\Resources\Settings\UserCollection;
use App\Repository\Settings\UserRepository;

/**
 * 
 * @resource User
 *
 * User resource representation.
 */
class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $UserRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(UserRepository $UserRepository)
    {
        $this->UserRepository = $UserRepository;
    }
    /**
     * List of Users.
     *
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\Users\UserCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        // if(isset($requestData['keyword'])){
        //     // \App\Models\CompanyCustomUser::createIndex($shards = null, $replicas = null);
        //     // \App\Models\CompanyCustomUser::putMapping($ignoreConflicts = true);
        //     // \App\Models\CompanyCustomUser::addAllToIndex();
        //     $Users = \App\Models\CompanyCustomUser::search($requestData['keyword']);
        // }else{
            $Users = $this->UserRepository->getAll($requestData,$perPage = 25);
        // }
        //output
        return new UserCollection($Users);
    }

    /**
     * Display the specified User.
     *
     * @param  int  $id
     * @return \App\Http\Resources\Users\UserResource
     */
    public function show($id)
    {
        //get data
        // $type = $request->only('type');
        // $UserParams = [];

        $User = $this->UserRepository->getById($id,'CompanyCustomUser');
        // if($type == 'dynamic'){
        //     $UserParams = $this->UserRepository->getCustomUserParams($id);
        // }
        

        if (is_null($User)) {
            return $this->sendError('User not found.');
        }
        //output
        return new UserResource($User);
    }

    /**
     * Store a new User.
     *
     * @response {
     *  success: true,
     *  data: [],
     *  code: 200,
     *}
     *
     * @param \App\Http\Requests\Users\UserRequest $request
     * @return mixed
     */
    public function store(UserRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $User_id = $this->UserRepository->createCustomUser(
            $company_id =1,
            $requestData
        );

        // return response()->json('User added!',200);
        // return redirect('admin/posts')->with('flash_message', 'User added!');
        // return redirect('admin/posts')->with('flash_message', 'User updated!');
        // return redirect('admin/posts')->with('flash_message', 'User deleted!');
        //output
        return $this->sendResponse('User_id:'.$User_id, 'User created successfully.');
    }

    /**
     * Update the specified User.
     *
     * @param \App\Http\Requests\Users\UserRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(UserRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $User_id = $this->UserRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('User_id:'.$User_id, 'User updated successfully.');
    }
    /**
     * Remove the specified User.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy($id)
    {
        $this->UserRepository->delete($id);
        //output
        return $this->sendResponse('User_id:'.$id, 'User deleted successfully.');
    }

}
