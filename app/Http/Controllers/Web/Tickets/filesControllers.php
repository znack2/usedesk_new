<?php

class FilesCategoryController extends BaseController
{
    protected $ticketRepository;

    function __construct(TicketRepository $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }

    //возвращает архив со всеми вложениями тикета
    public function getAllTicketAttachments($company_id)
    {
        
    }

    //возвращает архив вложений комментария
    public function getAllTicketCommentAttachments($company_id, $ticket_id)
    {
        
    }

    public function getChatCommentAttachment($company_id, $ticket_id)
    {
       
    }

    //возвращает вложение в тикете
    public function getDownloadFile($id)
    {
        
    }
}
    






