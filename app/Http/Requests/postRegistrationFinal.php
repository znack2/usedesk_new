<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postRegistrationFinal extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules($referer)
    {
        $rules = [
            'user_password' => 'required|confirmed',
            'user_password_confirmation' => 'required',
            'company_users_number' => 'required|integer|min:10',
        ];
        if (!$referer && strpos($referer, '/secretsignup') !== false) {
            $rules['user_email'] = 'required|email|unique:users,email';
        }
        return $rules;
    }
}
