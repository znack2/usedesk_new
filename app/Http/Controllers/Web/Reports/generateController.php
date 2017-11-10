<?php

class GenerateController extends BaseController {

    public function generateReportsCsv()
    {
       
    }

    public function getGenerateNps()
    {
        return $view('user.reports.nps',[
                'channelTypes'
                'channelList'
                'groups'
                'tags'
                'users'
                'ratings'
                'selectedClient'
                'selectedCompany'
                'percentage'
                'npsPaginator' =>  $all->paginate(20),
                'good'=>round($goodPercent),
                'normal'=>round($normalPercent),
                'bad'=>round($badPercent),
                'goodCount' => $good,
                'normalCount' => $normal,
                'badCount' => $bad,
                'filterComment' => true,
                'nps_filter'
                'activeUsers'
                'activeRatings'
                'commentExists'
                'ticketFields'
            ]
        );
    }

    public function getGenerateGeneral()
    {
        return $view('user.reports.general', [
            'daily'
            'channelTypes'
            'channelList'
            'groups'
            'tags'
            'dateStart'
            'dateEnd'
            'chartData'
            'replayTime'
            'closeTime'
            'firstReplayTime'
            'firstReplaySolved'
            'replaysToSolve'
            'queryString'
            'pie'
            'ticketFields'
        ]);
    }

    public function getGenerateUsers() 
    {
       return $view('user.reports.users', [
            'daily'
            'usersReportByIds'
            'notAssigned'
            'dateStart'
            'dateEnd'
            'comparePreviousPeriod'
            'channelTypes'
            'channelList'
            'groups'
            'tags'
            'ticketFields'
        ]);
    }
}