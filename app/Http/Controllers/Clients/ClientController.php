<?php

namespace App\Http\Controllers\Clients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Clients\ClientRequest;
use App\Http\Resources\Clients\ClientResource;
use App\Http\Resources\Clients\ClientCollection;
use App\Repository\Clients\ClientRepository;

/**
 * Class ClientController
 * @package App\Http\Controllers\Clients
 */
class ClientController extends Controller
{
    /**
     * @var clientRepository
     */
    protected $clientRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    function __construct(ClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \App\Http\Resources\Clients\ClientCollection
     */
    public function index(Request $request)
    {
        //get data
        $requestData = $request->all();
        //get from db
        $Clients = $this->clientRepository->getAll($requestData,$perPage = 25);
        //output
        return new ClientCollection($Clients);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \App\Http\Resources\Clients\ClientResource
     */
    public function show($id)
    {
        $Client = $this->clientRepository->getById($id);

        if (is_null($Client)) {
            return $this->sendError('Client not found.');
        }
        //output
        return new ClientResource($Client);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Clients\ClientRequest $request
     *
     * @return mixed
     */
    public function store(ClientRequest $request)
    {
        //get data
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Client_id = $this->clientRepository->createCustomClient(
            $company_id =1,
            $requestData
        );
        //output
        return $this->sendResponse('Client_id:'.$Client_id, 'Client created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Clients\ClientRequest $request
     * @param  int  $id
     *
     * @return mixed
     */
    public function update(ClientRequest $request, $id)
    {
        $requestData = $request->all();
//        $company_id = $this->CurrentCompany->id;

//        if($validator->fails()){
//            return $this->sendError('Validation Error.', $validator->errors());
//        }

        $Client_id = $this->clientRepository->update(
            $id,
            $company_id=1,
            $requestData
        );
        //output
        return $this->sendResponse('Client_id:'.$Client_id, 'Client updated successfully.');
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
        $this->clientRepository->delete($id);
        //output
        return $this->sendResponse('Client_id:'.$id, 'Client deleted successfully.');
    }
}
