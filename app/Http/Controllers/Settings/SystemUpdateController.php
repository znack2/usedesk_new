<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\SystemUpdateRequest;
use App\Http\Resources\Settings\SystemUpdateResource;
use App\Http\Resources\Settings\SystemUpdateCollection;
use App\Repository\Settings\SystemUpdateRepository;
use App\Repository\Settings\UserRepository;

/**
 * 
 * @resource SystemUpdate
 *
 * SystemUpdate resource representation.
 */
class SystemUpdateController extends Controller
{
    /**
     * @var systemUpdateRepository
     * @var userRepository
     */
    protected $systemUpdateRepository;
    protected $userRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(SystemUpdateRepository $systemUpdateRepository,UserRepository $userRepository)
    {
        $this->systemUpdateRepository = $systemUpdateRepository;
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\SystemUpdate\SystemUpdateCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $systemUpdate = $this->systemUpdateRepository->getAll($requestData,$perPage = 25);
        $this->userRepository->updateViewed();
        //output
        return new SystemUpdateCollection($systemUpdate);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\systemUpdate\systemUpdateResource
     */
    public function show($id)
    {
        $systemUpdate = $this->systemUpdateRepository->getById($id);

        if (is_null($systemUpdate)) {
            return $this->sendError('systemUpdate not found.');
        }
        //output
        return new SystemUpdateResource($systemUpdate);
    }

    /**
     * Store a new system Update.
     *
     * @response {
     *  success: true,
     *  data: [],
     *  code: 200,
     *}
     *
     * @param \App\Http\Requests\systemUpdates\SystemUpdateRequest $request
     * @return mixed
     */
    public function store(SystemUpdateRequest $request)
    {
        //get data
        $requestData = $request->all();

        $systemUpdate_id = $this->systemUpdateRepository->create(
            $type = 1,
            $requestData
        );
        //output
        return $this->sendResponse('systemUpdate_id:'.$systemUpdate_id, 'systemUpdate created successfully.');
    }

    /**
     * Update the specified systemUpdate.
     *
     * @param \App\Http\Requests\systemUpdates\SystemUpdateRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(SystemUpdateRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

        $systemUpdate_id = $this->systemUpdateRepository->update(
            $id,
            $type = 1,
            $requestData
        );
        //output
        return $this->sendResponse('systemUpdate_id:'.$systemUpdate_id, 'systemUpdate updated successfully.');
    }

    /**
     * Remove the specified systemUpdate.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy($id)
    {
        $this->systemUpdateRepository->delete($id);
        //output
        return $this->sendResponse('systemUpdate_id:'.$id, 'systemUpdate deleted successfully.');
    }
}
