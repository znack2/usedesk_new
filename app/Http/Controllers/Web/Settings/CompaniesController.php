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
        return view('user.company.index ', [
            'company',
            'languages'
        ]);
    }

    public function postContacts()
    {
        
    }

    public function getDeleteLogotype()
    {
        return back();
    }

    public function deleteDemoData() 
    {
        return back();
    }

    public function postWorkingDays()
    {
       
    }

    public function getWorkingDays()
    {
        return view('user.company.working_days', [
            'company'
        ]);
    }
}
