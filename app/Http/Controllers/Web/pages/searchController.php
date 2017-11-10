<?php
//Логика поиска тикетов/клиентов https://secure.usedesk.ru/search?search=
class SearchController extends BaseController
{

//admin
    public  function getManual()
    {
       return view('admin.admins.manual', [
            'methods'
        ]);
    }

//home
    public  function apiManual()
    {
       return view('user.api.manual', [
            'methods'
        ]);
    }

    public function getIndex()
    {
       return view('user.search.index', [
            'clientCompanies',
            'tickets',
            'clients',
            'users',
        ]);
    }

    public function getDetails($type) 
    {
        return view('user.search.details', [
            'data',
            'type',
            'links'
        ]);
    }
}