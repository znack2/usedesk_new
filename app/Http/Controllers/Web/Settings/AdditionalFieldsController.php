<?php

use App\Repository\AdditionalFieldsRepository;

//Мктоды дополнительных полей. Для каждой компании можно настроить свои идентефикаторы

class AdditionalFieldsController extends BaseController {

    protected $additionalFieldsRepository;

    function __construct(AdditionalFieldsRepository $additionalFieldsRepository)
    {
        $this->additionalFieldsRepository = $additionalFieldsRepository;
    }

//https://secure.usedesk.ru/settings/additional-fields
    public function getIndex()
    {
        return $view('user.additional_fields.index', [
            'activeFields',
            'inactiveFields',
            'formText',
            'formList',
            'formCheckbox'
        ]);
    }
//интерфейс редактирования
    public function getEditTicketField($type, $id = null)
    {
        return $view('user.additional_fields.tickets.edit', [
            'ticketField',
            'type',
            'arValues'
        ]);
    }
//сохранение настроек
    public function postEditTicketField($id = null)
    {
        return $response
                    ->json(['redirect()->route' => route('user.additional_fields.get_index')]);
    }
//удаление поля
    public function deleteTicketField($id)
    {
       return redirect()->route('user.additional_fields.get_index');
    }
//активация поля
    public function enableAndSortTicketFields()
    {
       
    }
//деактивация
    public function disableTicketFields()
    {
       
    }
//поиск по полям
    public function searchByTextField() 
    {
        return $response
                    ->json($res);
    }
}