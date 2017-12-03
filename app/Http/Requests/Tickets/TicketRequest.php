<?php

namespace App\Http\Requests\Tickets;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // $ticketFields = $this->TicketFieldRepository->//repo2
        $company_id = 1;
        // $company_id = $this->CurrentCompany->id;

        $rules = [
            'email_channel_id' => 'required|exists:company_email_channels,id,company_id,' . $company_id,
            'subject' => 'required',
            'message' => 'required',
            'phone_channel_phone' => 'phone',
            'phone_type' => 'in:' . implode(',', config('constants.ClientPhone')),
            'cc' => 'copy_validator',
            'bcc' => 'copy_validator',
        ];
       
        // foreach ($ticketFields as $ticketField) {
        //     $rules['ticket_fields.'.$ticketField->id] = 'required';
        // }
        //если новый клиент
        if ($this->get('client_id') == 'new_client') {
            $rules['client_name'] = 'required';
            $emailRule = '';
        } else {
            $rules['client_id'] = 'required|exists:clients,id,company_id,' . $company_id;
            $emailRule = '|client_email_unique:'.$company_id;
        }
        //если новый E-mail
        if ($this->get('email_channel_email') == 'new_email') {
            $emailKey = 'new_email';
            $rules['new_email'] = ($this->get('type') == 'private') ? 'email'.$emailRule : 'required|email'.$emailRule;
        } else {
            $emailKey = 'email_channel_email';
            $rules['email_channel_email'] = ($this->get('type') == 'private') ? 'email' : 'required|email';
        }





        // $rules = [
        //     'subject' => '',
        //     'status_id' => 'exists:ticket_statuses,id',
        //     'priority' => 'in:' . implode(',', Ticket::getPriorityList()),
        //     'type' => 'in:' . implode(',', Ticket::getTypeList()),
        //     'client_id' => 'exists:clients,id,company_id,' . Company::current()->id,
        // ];
        // if (Input::has('assignee_id') && Input::get('assignee_id') != '-') {
        //     //$rules['assignee_id'] = 'exists:users,id,company_id,' . Company::current()->id;
        // }

        
        return $rules;
    }
}
