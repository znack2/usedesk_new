<?php

use Symfony\Component\HttpFoundation\File\UploadedFile;
use UseDesk\Validator\Token;

class MultipleController extends BaseController
{

    protected $ticketRepository;
    protected $ticketStatusRepository;
    protected $service;

    function __construct(
        TicketRepository $ticketRepository,
        TicketStatusRepository $ticketStatusRepository,
        Curl $curl)
    {
        $this->ticketRepository = $ticketRepository;
        $this->ticketStatusRepository = $ticketStatusRepository;
        $this->service = $curl
    }

    public function postEditMultiple()
    {
        
    }
}