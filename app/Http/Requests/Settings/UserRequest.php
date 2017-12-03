<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'required|email',
            'name' => 'required',
            'phone' => 'phone',
            'role' => 'in:' . implode(',',  config('constants.User')),
        ];
        if (!$this->id) {
            $rules['password'] = 'required';
        }
        return $rules;
    }
}
