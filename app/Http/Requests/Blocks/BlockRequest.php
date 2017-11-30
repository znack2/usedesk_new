<?php

namespace App\Http\Requests\Blocks;

use Illuminate\Foundation\Http\FormRequest;

class BlockRequest extends FormRequest
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
            'title' => 'required'
        ];
        if($this->get('type') == 'static'){
            $rules['text'] = 'required';
        }else if($this->get('type') == 'dynamic'){
            $rules['url'] = 'required';
        }
        return $rules;
    }
}
