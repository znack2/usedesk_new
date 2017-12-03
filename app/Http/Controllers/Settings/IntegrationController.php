<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\IntergationRequest;
use App\Http\Resources\Settings\IntergationResource;
use App\Repository\Settings\IntergationRepository;
/**
 * 
 * @resource Intergation
 *
 * Intergation resource representation.
 */
class IntegrationController extends Controller
{
    
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

        $Intergation = $this->IntergationRepository->getById($id,'CompanyCustomIntergation');

        if (is_null($Intergation)) {
            return $this->sendError('Intergation not found.');
        }
        //output
        return new IntergationResource($Intergation);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IntergationRequest $request)
    {
        //get data
        $requestData = $request->all();
        //$company_id = $this->CurrentCompany->id;

        $Intergation_id = $this->IntergationRepository->create(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Intergation_id:'.$Intergation_id, 'Intergation created successfully.');
    }

}
