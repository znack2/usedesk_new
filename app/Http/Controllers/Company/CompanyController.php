<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Company\CompanyRequest;
use App\Http\Resources\Company\CompanyResource;
use App\Http\Resources\Company\CompanyCollection;
use App\Repository\Company\CompanyRepository;

/**
 * Class CompanyController
 * @package App\Http\Controllers\Company
 */
class CompanyController extends Controller
{
    /**
     * @var companyRepository
     */
    protected $companyRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(CompanyRepository $companyRepository)
    {
        $this->companyRepository = $companyRepository;
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
        $Company = $this->companyRepository->getAll($requestData,$perPage = 25);
        //output
        return new CompanyCollection($Company);
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
        $Company = $this->companyRepository->getById($id);

        if (is_null($Company)) {
            return $this->sendError('Company not found.');
        }
        //output
        return new CompanyResource($Company);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Company\CompanyRequest $request
     *
     * @return mixed
     */
    public function store(CompanyRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Company_id = $this->companyRepository->createCustomCompany(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Company_id:'.$Company_id, 'Company created successfully.');
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

        $Company_id = $this->companyRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('Company_id:'.$Company_id, 'Company updated successfully.');
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
    public function deleteLogotype($id)
    {
        $this->companyRepository->delete($id);
        //output
        return $this->sendResponse('Company_id:'.$id, 'Company deleted successfully.');
    }
}
