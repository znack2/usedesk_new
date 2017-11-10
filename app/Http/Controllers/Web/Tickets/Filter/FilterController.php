<?php

class FilterCategoryController extends BaseController
{
    protected $ticketRepository;

    function __construct(TicketRepository $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }

    public function postSaveFilter()
    {
        
    }

    public function postEditFilter($id) 
    {
        
    }

    public function getDeleteFilter($id)
    {
        
    }

    public function sortFilters() {
        
    }
}