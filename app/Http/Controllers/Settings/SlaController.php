<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\SlaRequest;
use App\Http\Resources\Settings\SlaResource;
use App\Repository\Settings\SlaRepository;
/**
 * 
 * @resource SLA
 *
 * SLA resource representation.
 */
class SlaController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SlaRequest $request)
    {
        //get data
        $requestData = $request->all();
        //$company_id = $this->CurrentCompany->id;

        $Sla_id = $this->SlaRepository->create(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Sla_id:'.$Sla_id, 'Sla created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get data
        // $type = $request->only('type');

        $Sla = $this->SlaRepository->getById($id,'CompanyCustomSla');

        if (is_null($Sla)) {
            return $this->sendError('Sla not found.');
        }
        //output
        return new SlaResource($Sla);
    }
}
