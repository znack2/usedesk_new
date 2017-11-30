<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postRegistration extends FormRequest
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
    public function rules($sms_confirmation_status)
    {
        return [
            'company_name' => 'required',
            'company_phone' => ($sms_confirmation_status == 1) ? 'required|phone_alt' : 'phone_alt',
            'user_name' => 'required',
        ];
    }
}
