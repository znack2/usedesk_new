<?php

class ChatReportsController extends BaseController
{
    protected $categoryRepository;

    function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getChatDialogLength($dateStart, $dateEnd, $closeTime) 
    {
       
    }

    public function getChatBlocks($dateStart, $dateEnd, $dateStartPrev, $dateEndPrev, $ticketIds = [], $lastDateIds = [], $bDatesAreEqual = false) 
    {
      
    }

    public function getChatDataByDate($dateStart, $dateEnd, $bDatesAreEqual = false) 
    {
       
    }

    public function getChatDataByDays($dateStart, $dateEnd) 
    {
       
    }

    public function getChatDataByHours($dateStart, $dateEnd) 
    {
       
    }

    public function getChatMissed() 
    {
        
    }

    public function getChatAgents() 
    {
       
    }

    public function createChatAgentsReport($dateStart, $dateEnd) 
    {
        
    }

    public function getGenerateChat() 
    {
        return view('user.reports.chat', [
            'chatBlocks'
            'compare_previous_period'
            'replayTime'
            'closeTime'
            'workLength'
            'dialogLength'
            'queryString'
        ]);
    }
  
    public function getChatMissedXls() 
    {
       return back();
    }
}


