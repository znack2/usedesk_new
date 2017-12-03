<?php

namespace App\Http\Requests\Blocks;

use Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BlockRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//        switch($this->method())
//        {
//            case 'GET':
//            case 'DELETE':
//            {
//                return [];
//            }
//            case 'POST':
//            {
//                return [];
//            }
//            case 'PUT':
//            case 'PATCH':
//            {
//                return [];
//            }
//            default:break;
//        }

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
