<?php

namespace App\Http\Controllers\Reports;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Reports\ReportRequest;
use App\Http\Resources\Reports\ReportResource;
use App\Http\Resources\Reports\ReportCollection;
use App\Repository\Reports\ReportRepository;

/**
 * 
 * @resource Reports
 *
 * Reports resource representation.
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
    public function index(ReportRequest $request)
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
}
