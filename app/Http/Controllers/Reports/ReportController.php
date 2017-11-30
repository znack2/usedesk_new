<?php

namespace App\Http\Controllers\Reports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Reports\ReportRequest;
use App\Http\Resources\Reports\ReportResource;
use App\Http\Resources\Reports\ReportCollection;
use App\Repository\Reports\ReportRepository;

/**
 * Class ReportController
 * @package App\Http\Controllers\Reports
 */
class ReportController extends Controller
{
    /**
     * @var reportRepository
     */
    protected $reportRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(ReportRepository $reportRepository)
    {
        $this->reportRepository = $reportRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\Reports\ReportCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $Reports = $this->reportRepository->getAll($requestData,$perPage = 25);
        //output
        return new ReportCollection($Reports);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\Reports\ReportResource
     */
    public function show($id)
    {
        $Report = $this->reportRepository->getById($id);

        if (is_null($Report)) {
            return $this->sendError('Report not found.');
        }
        //output
        return new ReportResource($Report);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Reports\ReportRequest $request
     *
     * @return mixed
     */
    public function store(ReportRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Report_id = $this->reportRepository->createCustomReport(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Report_id:'.$Report_id, 'Report created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Reports\ReportRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(ReportRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Report_id = $this->reportRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('Report_id:'.$Report_id, 'Report updated successfully.');
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
        $this->reportRepository->delete($id);
        //output
        return $this->sendResponse('Report_id:'.$id, 'Report deleted successfully.');
    }
}
