<?php

namespace App\Http\Controllers\Triggers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Triggers\TriggerRequest;
use App\Http\Resources\Triggers\TriggerResource;
use App\Http\Resources\Triggers\TriggerCollection;
use App\Repository\Triggers\TriggerRepository;

/**
 * Class TriggerController
 * @package App\Http\Controllers\Triggers
 */
class TriggerController extends Controller
{
    /**
     * @var triggerRepository
     */
    protected $triggerRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(TriggerRepository $triggerRepository)
    {
        $this->triggerRepository = $triggerRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\Triggers\TriggerCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $Triggers = $this->triggerRepository->getAll($requestData,$perPage = 25);
        //output
        return new TriggerCollection($Triggers);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\Triggers\TriggerResource
     */
    public function show($id)
    {
        $Trigger = $this->triggerRepository->getById($id);

        if (is_null($Trigger)) {
            return $this->sendError('Trigger not found.');
        }
        //output
        return new TriggerResource($Trigger);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Triggers\TriggerRequest $request
     *
     * @return mixed
     */
    public function store(TriggerRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Trigger_id = $this->triggerRepository->createCustomTrigger(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Trigger_id:'.$Trigger_id, 'Trigger created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Triggers\TriggerRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(TriggerRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Trigger_id = $this->triggerRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('Trigger_id:'.$Trigger_id, 'Trigger updated successfully.');
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
        $this->triggerRepository->delete($id);
        //output
        return $this->sendResponse('Trigger_id:'.$id, 'Trigger deleted successfully.');
    }
}
