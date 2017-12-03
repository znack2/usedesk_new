<?php

namespace App\Http\Requests\Triggers;

use Illuminate\Foundation\Http\FormRequest;

class TriggerRequest extends FormRequest
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
    public function rules()
    {
        $this->triigerRepository->//repo1_1
        $this->triigerRepository->//repo1_2
        $this->triigerRepository->//repo1_3
        $control = $this->triigerRepository->//repo1_4

        $rules = [
            'name' => 'required',
            'enabled' => 'required|boolean',
            'manual_starting' => 'required|boolean',
            'triggerConditionsAndActions' => 'triggerConditionsAndActions',
        ];
        
        foreach ($this->request->get('conditions', []) as $key => $conditionData) {
            $rules["conditions.{$key}.boolean"] = 'required|in:' . implode(',', 
        );
            $rules["conditions.{$key}.target"] = 'required|in:' . implode(',', 
        );
            $rules["conditions.{$key}.condition"] = 'required|in:' . implode(',', 
        );
            
        switch ($control['control']) {
                case 'text':
                case 'textarea':
                    $rules["conditions.{$key}.value"] = 'required';
                    break;
                case 'select':
                    $rules["conditions.{$key}.value"] = 'required|in:' . implode(',', array_fetch($control['options'], 'key'));
                    break;
                case 'duration':
                    $rules["conditions.{$key}.value"] = 'required|duration_greater_than_zero';
                    break;
                case 'timerange':
                    $rules["conditions.{$key}.value"] = 'required|time_range';
                    break;
                case 'date':
                    $rules["conditions.{$key}.value"] = 'required|date';
                    break;
                default:
                    throw new Exception('Invalid control');
            }
            $rules["conditions.{$key}.self"] = 'triggerConditions:'.$key.','.$conditionData['target'];
        }
        return $rules;
    }
}
