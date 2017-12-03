<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class ClientMergeRequest extends FormRequest
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
        $company_id = $this->CurrentCompany->id;

        return [
            'client_id' => 'required|exists:clients,id,company_id,' . $company_id,
            'merge_with_client_id' => 'required|exists:clients,id,company_id,' . $company_id,
        ];
    }
}
