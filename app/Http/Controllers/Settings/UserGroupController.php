<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\UserGroupRequest;
use App\Http\Resources\Settings\UserGroupResource;
use App\Http\Resources\Settings\UserGroupCollection;
use App\Repository\Settings\UserGroupRepository;

/**
 * 
 * @resource UserGroup
 *
 * UserGroup resource representation.
 */
class UserGroupController extends Controller
{
    /**
     * @var UserGroupRepository
     */
    protected $UserGroupRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(UserGroupRepository $UserGroupRepository)
    {
        $this->UserGroupRepository = $UserGroupRepository;
    }
    /**
     * List of UserGroups.
     *
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\UserGroups\UserGroupCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;
        //get from db
        $UserGroups = $this->UserGroupRepository->getAll($company_id,$requestData,$perPage = 25);
        //output
        return new UserGroupCollection($UserGroups);
    }

    /**
     * Display the specified UserGroup.
     *
     * @param  int  $id
     * @return \App\Http\Resources\UserGroups\UserGroupResource
     */
    public function show($id)
    {
        //get data
        // $type = $request->only('type');

        $userGroup = $this->UserGroupRepository->getById($id,'CompanyCustomUserGroup');

        if (is_null($userGroup)) {
            return $this->sendError('UserGroup not found.');
        }
        //output
        return new UserGroupResource($userGroup);
    }

    /**
     * Store a new UserGroup.
     *
     * @response {
     *  success: true,
     *  data: [],
     *  code: 200,
     *}
     *
     * @param \App\Http\Requests\UserGroups\UserGroupRequest $request
     * @return mixed
     */
    public function store(UserGroupRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

        $userGroup_id = $this->UserGroupRepository->createCustomUserGroup(
            $company_id =1,
            $requestData['name']
        );
        if($permissions){
            foreach (Input::get('users', []) as $userId) {
                 $userGroup_id = $this->UserGroupRepository->createCustomUserGroup(
                    $company_id =1,
                    $requestData['name']
                );  
            }
        }
        if($attachUser){
            foreach (Input::get('users', []) as $userId) {
                 $userGroup_id = $this->UserGroupRepository->createCustomUserGroup(
                    $company_id =1,
                    $requestData['name']
                );  
            }
        }
        if($channels){
            foreach (Input::get('users', []) as $userId) {
                 $userGroup_id = $this->UserGroupRepository->createCustomUserGroup(
                    $company_id =1,
                    $requestData['name']
                );  
            }
        }
        $userGroup_id = $this->UserGroupRepository->createCustomUserGroup(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('UserGroup_id:'.$userGroup_id, 'UserGroup created successfully.');
    }

    /**
     * Update the specified UserGroup.
     *
     * @param \App\Http\Requests\UserGroups\UserGroupRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(UserGroupRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

        $userGroup_id = $this->UserGroupRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('UserGroup_id:'.$userGroup_id, 'UserGroup updated successfully.');
    }

    /**
     * Remove the specified UserGroup.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy($id)
    {
        //check if usergroups more than 1
        $this->UserGroupRepository->delete($id);
        //output
        return $this->sendResponse('UserGroup_id:'.$id, 'UserGroup deleted successfully.');
    }
}
