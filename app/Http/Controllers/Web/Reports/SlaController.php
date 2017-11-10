<?php

class SlaController extends BaseController {


    public function getGenerateSla()
    {
        return view('user.reports.sla', [
            'daily',
            'channelTypes',
            'channelList',
            'groups',
            'tags',
            'dateStart',
            'dateEnd',
            'chartData', 
            'queryString',
            'usersToGroups',
            'noCompare',
            'ticketFields'
        ]);
    }

    public function getSlaCsv() 
    {
        return back();
    }


    public function getUserReport()
    {
      
    }

    public function getUserCsv() 
    {
        
    }
}