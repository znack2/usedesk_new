<?php

use Symfony\Component\HttpFoundation\File\UploadedFile;

class CommentController extends BaseController
{    
    protected $ticketRepository;
    protected $service;

    function __construct(TicketRepository $ticketRepository,Curl $curl)
    {
        $this->ticketRepository = $ticketRepository;
        $this->service = $curl
    }
	//создание комментария
    //добавление комментария к тикету
    public function postCreateComment($id)
    {
        
    }
}