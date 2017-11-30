<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class WorkingDaysRequest extends FormRequest
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
            'timezone' => 'required|timezone',
        ];
        $inputWorkingDays = $this->get('working_days', []);
        foreach ($inputWorkingDays as $day => $dayData) {
            $rules['working_days.' . $day . '.is_working'] = 'required|boolean';
            $rules['working_days.' . $day . '.start'] = 'required|time';
            $rules['working_days.' . $day . '.end'] = 'required|time';
        }
        return $rules;
    }
}
