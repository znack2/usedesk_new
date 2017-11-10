<?php
//стартовая страница https://secure.usedesk.ru/
class DashboardController extends BaseController
{
    public function getIndex()
    {
    	 return $this->view
        			->make('user.dashboard.index', ['ticketPaginator']);
    }
    
    public function getMessengerInfo()
    {
        return $this->view
        			->make('user.dashboard.info_messengers');
    }
}


