<?php

namespace App\Http\Requests\Settings\Company;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'logotype' => 'image',
            'signature_enabled' => 'boolean',
        ];
        for ($i = 0; $i < count($this->get('phones')); $i++) {
            $rules['phones.phone.' . $i] = 'phone';
        }
        return $rules;
    }
}
