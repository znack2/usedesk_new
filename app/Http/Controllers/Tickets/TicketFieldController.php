<?php

namespace App\Http\Controllers\Tickets;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tickets\TicketFieldRequest;
use App\Http\Resources\Tickets\TicketFieldResource;
use App\Http\Resources\Tickets\TicketFieldCollection;
use App\Repository\Tickets\TicketFieldRepository;

/**
 * 
 * @resource TicketField
 *
 * TicketField resource representation.
 */
class TicketFieldController extends Controller
{
    /**
     * @var ticketFieldRepository
     */
    protected $ticketFieldRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(TicketFieldRepository $ticketFieldRepository)
    {
        $this->ticketFieldRepository = $ticketFieldRepository;
    }
    /**
     * List of TicketFields.
     *
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\TicketFields\TicketFieldCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $TicketFields = $this->ticketFieldRepository->getAll($requestData,$perPage = 25);
        //output
        return new TicketFieldCollection($TicketFields);
    }

    /**
     * Display the specified TicketField.
     *
     * @param  int  $id
     * @return \App\Http\Resources\TicketFields\TicketFieldResource
     */
    public function show($id)
    {
        //get data
        // $type = $request->only('type');
        $TicketField = $this->ticketFieldRepository->getById($id,'CompanyCustomTicketField');
        if (is_null($TicketField)) {
            return $this->sendError('TicketField not found.');
        }
        //output
        return new TicketFieldResource($TicketField);
    }

    /**
     * Store a new TicketField.
     *
     * @response {
     *  success: true,
     *  data: [],
     *  code: 200,
     *}
     *
     * @param \App\Http\Requests\TicketFields\TicketFieldRequest $request
     * @return mixed
     */
    public function store(TicketFieldRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;
        $TicketField_id = $this->ticketFieldRepository->createCustomTicketField(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('TicketField_id:'.$TicketField_id, 'TicketField created successfully.');
    }

    /**
     * Update the specified TicketField.
     *
     * @param \App\Http\Requests\TicketFields\TicketFieldRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(TicketFieldRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

        $TicketField_id = $this->ticketFieldRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('TicketField_id:'.$TicketField_id, 'TicketField updated successfully.');
    }

    /**
     * Remove the specified TicketField.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy($id)
    {
        $this->ticketFieldRepository->delete($id);
        //output
        return $this->sendResponse('TicketField_id:'.$id, 'TicketField deleted successfully.');
    }

    /**
     * sort blocks
     *
     * @param  int  $id
     * @return mixed
     */
    public function toggleEnable(Request $request)
    {
        //get data
        $fields = $request->get('fields');
        //update in db
        foreach ($fields as $id => $sort) {
            $block = $this->blockRepository->toggleEnable($id,$sort);
        }
        //output
        return $this->sendResponse('blocks:'.$block, 'Blocks have been sorted successfully.');
    }
}
