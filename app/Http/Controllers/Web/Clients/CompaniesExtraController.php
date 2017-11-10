<?php


    public function getTickets($id) 
    {
       return $response->json($response);
    }

    public function getClients($id) 
    {
        return $response->json($response);
    }

    public function getVip($id)
    {
        return $response->json($res);
    }

    public function newClientJson($id) 
    {
        return $response->json(['redirect()->route' => route('user.client_companies.get_details', ['id' => $id])]);
    }

    public function getClientNameByEmail() 
    {
        return $response->json($res);
    }
    
    public function deleteAvatar($id) 
    {
       
    }

    public function getDetails($id)
    {
       return $view('user.client_companies.details', [
            'clientCompany',
            'tickets',
            'clients',
            'tags',
            'address'
        ]);
    }
