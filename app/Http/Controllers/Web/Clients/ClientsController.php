<?php

use App\Repository\ClientsRepository;

//Клиентов можно объединять в компании,
class ClientsController extends BaseController
{
    protected $clientsRepository;

    function __construct(ClientsRepository $clientsRepository)
    {
        $this->clientsRepository = $clientsRepository;
    }

    //https://devsecure.usedesk.ru/clients/companies
    public function getIndex()
    {
       
    }
    //https://devsecure.usedesk.ru/clients/companies/4
    public function getDetails($id)
    {
       return view('user.clients.details', [
            'client',
            'tickets'
        ]);
    }

    public function getEdit($id = null)
    {
       return view('user.clients.edit', [
            'client',
            'clientCompanies'
        ]);
    }

    public function postEdit($id = null)
    {
        return $this->response
                    ->json(['redirect()->route' => URL::route('user.clients.get_details', $client_id)]);
    }

    public function getDelete($id)
    {
        return back();
    }

    public function getDeleteAvatar($id)
    {
        return back();
    }

    public function postMerge()
    {
        return back();
    }
}