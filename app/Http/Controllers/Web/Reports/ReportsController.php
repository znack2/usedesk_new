<?php

use UseDesk\Reports\ProductivityReports;
use UseDesk\Reports\AutomationReports;

class ReportsController extends BaseController {
    
    protected $by_published = false;
    protected $by_chat = false;

    public function file_force_download($file) {
       
    }

    public function getAutomationReport($name)
    {
       
    }

    public function getCommonReport($name)
    {
        
    }

    public function getCommonReportByTicketIds($name)
    {
       
    }

    public function getReport($name)
    {
        
    }

    public function getReportByTicketIds($name, $ticketIds = [], $lastDateIds = [])
    {
       
    }

    public function getStatusCsv() 
    {
        
    }

    public function getDataTableTags() 
    {
       
    }

    public function getDataTableMacroses() 
    {
        
    }

    public function getMacrosesByTicketIds($dateStart, $dateEnd) 
    {
       
    }

    public function getDataTableTriggers() 
    {
       
    }

    public function getTriggersByTicketIds($dateStart, $dateEnd) 
    {
       
    }
    
    public function getData($dataType)
    {
      
    }
}



