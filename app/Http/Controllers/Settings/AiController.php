<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\AiRequest;
use App\Http\Resources\Settings\AiResource;
use App\Repository\Settings\AiRepository;
/**
 * 
 * @resource Ai
 *
 * Ai resource representation.
 */
class AiController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AiRequest $request)
    {
        //get data
        $requestData = $request->all();
        //$company_id = $this->CurrentCompany->id;

        $Ai_id = $this->AiRepository->create(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Ai_id:'.$Ai_id, 'Ai created successfully.');
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

        $Ai = $this->AiRepository->getById($id,'CompanyCustomAi');

        if (is_null($Ai)) {
            return $this->sendError('Ai not found.');
        }
        //output
        return new AiResource($Ai);
    }
}
