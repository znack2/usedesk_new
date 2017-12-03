<?php

namespace App\Http\Controllers\Settings\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Company\CompanyRequest;
use App\Http\Resources\Company\CompanyResource;
use App\Http\Resources\Company\CompanyCollection;
use App\Repository\Settings\Company\CompanyRepository;
use App\Services\DemoDataService;

/**
 * 
 * @resource Company
 *
 * Company resource representation.
 */
class CompanyController extends Controller
{
    /**
     * @var companyRepository
     */
    protected $companyRepository;
    protected $demoService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
        $this->demoService = new DemoDataService($this->CurrentCompany);
    }
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\Company\CompanyCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $company = $this->companyRepository->getAll($requestData,$perPage = 25);
        //output
        return new CompanyCollection($company);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\Company\CompanyResource
     */
    public function show($id)
    {
        $company = $this->companyRepository->getById($id);

        if (is_null($company)) {
            return $this->sendError('Company not found.');
        }
        //output
        return new CompanyResource($company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Company\CompanyRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(CompanyRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $company_id = $this->companyRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('Company_id:'.$company_id, 'Company updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return mixed
     */
    public function deleteLogotype($id)
    {
        $this->companyRepository->delete($id);
        //output
        return $this->sendResponse('Company_id:'.$id, 'Company deleted successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return mixed
     */
    public function deleteDemoData($id)
    {
        $this->demoService->deleteDemoData();
        //output
        return $this->sendResponse('Company_id:'.$id, 'Company deleted successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showSetting($field)
    {
        //get data
        // $type = $request->only('type');

        // $getStarted = $this->CurrentCompany->getStarted;
        // $textSettings = $this->CurrentCompany->textSettings;

        if (is_null($field)) {
            return $this->sendError('field not found.');
        }
        //output
        return new FieldResource($field);
    }
    /**
     * sort blocks
     *
     * @param  int  $id
     * @return mixed
     */
    public function toggleSetting(Request $request,$field)
    {
        //get data
        $company_id = $this->CurrentCompany->id;
        $value = $request->only('use_typographer');
        //update in db
        $company = $this->companyRepository->toggleField($company_id,$field,$value);
        //output
        return $this->sendResponse('company:'.$company, 'Field have been toggled successfully.');
    }

    public function getStarted($company,$key)
    {
        $getStarted = $company->getStartedByKey($key);
        if($getStarted) {
            $getStarted->done = true;
            $getStarted->save();
        }
    }
}
