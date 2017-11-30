<?php

namespace App\Http\Controllers\profiles;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\ProfileRequest;
use App\Http\Resources\Profile\ProfileResource;
use App\Http\Resources\Profile\ProfileCollection;
use App\Repository\Profile\ProfileRepository;

/**
 * Class profileController
 * @package App\Http\Controllers\profiles
 */
class ProfileController extends Controller
{
    /**
     * @var profileRepository
     */
    protected $profileRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\profiles\profileCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $profiles = $this->profileRepository->getAll($requestData,$perPage = 25);
        //output
        return new profileCollection($profiles);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\profiles\profileResource
     */
    public function show($id)
    {
        //get data

        $profile = $this->profileRepository->getById($id,'CompanyCustomprofile');

        if (is_null($profile)) {
            return $this->sendError('profile not found.');
        }
        //output
        return new profileResource($profile);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\profiles\profileRequest $request
     *
     * @return mixed
     */
    public function store(ProfileRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

        $profile_id = $this->profileRepository->createCustomprofile(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('profile_id:'.$profile_id, 'profile created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\profiles\profileRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(ProfileRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

        $profile_id = $this->profileRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('profile_id:'.$profile_id, 'profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return mixed
     */
    public function destroy($id)
    {
        $this->profileRepository->delete($id);
        //output
        return $this->sendResponse('profile_id:'.$id, 'profile deleted successfully.');
    }

    /**
     * sort
     *
     * @param  int  $id
     *
     * @return mixed
     */
    public function sort(Request $request)
    {
        //get data
        $order = $request->get('order');
        //update in db
        foreach ($order as $sort => $id) {
            $profile = $this->profileRepository->updateSort($id,$sort);
        }
        //output
        return $this->sendResponse('profiles:'.$profile, 'profiles have been sorted successfully.');
    }
}
