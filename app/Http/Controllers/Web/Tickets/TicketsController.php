<?php

use App\Repository\ticketsRepository;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use UseDesk\Validator\Token;

class TicketsController extends BaseController
{
    protected $ticketsRepository;

    function __construct(TicketsRepository $ticketsRepository)
    {
        $this->ticketsRepository = $ticketsRepository;
    }
    
//общая страница с тикетами https://devsecure.usedesk.ru/tickets
    public function getIndex()
    {
       
    }
    //метод подгрузки тикетов в таблицу AJAX
    public function getTickets() {
       
    }
    /**
     * Просмотр тикета
     * @param $id
     * @return mixed
     * @throws Exception
     */
//детальная страница тикета https://devsecure.usedesk.ru/tickets/3038212
    public function getDetails($id)
    {
       
    }
//метод для листания тикетов внутри детальной страницы. То есть перешел в тикет и можешь перейти в следующий
    public function getPrevAndNextTickets($id)
    {
        
    }
//страница создания тикета https://devsecure.usedesk.ru/tickets/create
    public function getCreate($id = null)
    {
      
    }
//создание тикета
    public function postCreate()
    {
    }

//редактирование тикета
    public function postEdit($id)
    {
       
    }

    /** Объединение тикетов
     * @return mixed
     */
    public function postMerge()
    {
        
    }
}