<?php

namespace App\Http\Controllers\Tickets;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tickets\TicketRequest;
use App\Http\Requests\Tickets\TicketMergeRequest;
use App\Http\Resources\Tickets\TicketResource;
use App\Http\Resources\Tickets\TicketCollection;
use App\Repository\Tickets\TicketRepository;

/**
 * @resource Ticket
 *
 * Ticket resource representation.
 */
class TicketController extends Controller
{
    /**
     * @var ticketRepository
     */
    protected $ticketRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(TicketRepository $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }
    /**
     * List of tickets.
     *
     * @param \Illuminate\Http\Request $request
     * @return \App\Http\Resources\Tickets\TicketCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $Tickets = $this->ticketRepository->getAll($requestData,$perPage = 25);
        //output
        return new TicketCollection($Tickets);
    }

    /**
     * Display the specified ticket.
     *
     * @param  int  $id
     * @return \App\Http\Resources\Tickets\TicketResource
     */
    public function show($id)
    {
        $Ticket = $this->ticketRepository->getById($id);

        if (is_null($Ticket)) {
            return $this->sendError('Ticket not found.');
        }
        //output
        return new TicketResource($Ticket);
    }

    /**
     * Store a new ticket.
     *
     * @param \App\Http\Requests\Tickets\TicketRequest $request
     * @return mixed
     */
    public function store(TicketRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Ticket_id = $this->ticketRepository->createCustomTicket(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Ticket_id:'.$Ticket_id, 'Ticket created successfully.');
    }

    /**
     * Update the specified ticket.
     *
     * @param \App\Http\Requests\Tickets\TicketRequest $request
     * @param  int  $id
     * @return mixed
     */
    public function update(TicketRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Ticket_id = $this->ticketRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('Ticket_id:'.$Ticket_id, 'Ticket updated successfully.');
    }
    /**
     * post Merge
     *
     * @param  int  $id
     * @return mixed
     */
    public function merge(TicketMergeRequest $request)
    {
        //get data
        // $company_id = $this->CurrentCompany->id;
        $requestData = $request->all();
        
        $this->ticketRepository->merge($requestData);
        //output
        return $this->sendResponse('Client_id:', 'Ticket merged successfully.');
    }

    /**
     * Remove the specified ticket.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy($id)
    {
        $this->ticketRepository->delete($id);
        //output
        return $this->sendResponse('Ticket_id:'.$id, 'Ticket deleted successfully.');
    }
}
