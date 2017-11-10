<?php

use Illuminate\Support\Facades\App;

class IntegrationController extends BaseController
{
    public function getIndex()
    {
   		return view('user.integration.index', [
            'integrations'
        ]);
    }

    public function postChangeStatus()
    {

    }
}