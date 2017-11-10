<?php

//гайд для новых клиентов https://secure.usedesk.ru/get-started
class GetStartedController extends BaseController {

    public function getIndex() 
    {
      	return $this->view
        			->make('user.get_started.index');
    }

    public function getClose()
    {
        return back();
    }

}