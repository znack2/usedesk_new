<?php

use App\Repository\CompaniesRepository;

class CompaniesController extends BaseController
{
    protected $companiesRepository;

    function __construct(CompaniesRepository $companiesRepository)
    {
        $this->companiesRepository = $companiesRepository;
    }

    public function getIndex()
    {
       return view('user.client_companies.index', [
            'clientCompanies'
            'tags'
        ]);
    }

    public function getEdit($id = null)
    {
        return view('user.client_companies.edit', [
            'clientCompany',
            'tags',
            'address'
        ]);
    }

    public function postEdit($id = null)
    {
        return redirect()->route('user.client_companies.get_details', ['id' => $clientCompany_id]);
    }

    public function getDelete($id) 
    {
        return redirect()->route('user.client_companies.get_index');
    }
}
