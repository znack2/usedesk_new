<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
       $company_id = 1;
       // $company_id = $this->CurrentCompany->id;

       $phones = config('constants.ClientPhone');
       $social_networks = config('constants.welcome');
       $messengers = config('constants.welcome');
       $addresses = config('constants.welcome');

        $rules = [
            'name' => 'required',
            'avatar' => 'image',
            'spammer' => 'boolean',
            'vip' => 'boolean',
        ];
        if ($this->request->get('client_company_id') != '_new_') {
            $rules['client_company_id'] = 'exists:client_companies,id,company_id,' . $company_id;
        } else {
            $rules['client_company_name'] = 'required';
        }

        for ($i = 0; $i < count($this->request->get('phones.phone')); $i++) {
            if (count($this->request->get('phones.phone')) == 1) {
                $rules['phones.phone.' . $i] = 'phone';
                $rules['phones.type.' . $i] = 'required_with:phones.phone.' . $i . '|in:' . implode(',',$phones);
            } else {
                $rules['phones.phone.' . $i] = 'required|phone';
                $rules['phones.type.' . $i] = 'required|in:' . implode(',', $phones);
            }
        }
        for ($i = 0; $i < count($this->request->get('emails.email')); $i++) {
            if (count($this->request->get('emails.email')) == 1) {
                $rules['emails.email.' . $i] = 'email|client_email_unique:' . $company_id . ',' . $this->id;
            } else {
                $rules['emails.email.' . $i] = 'required|email|client_email_unique:' . $company_id . ',' . $this->id;
            }
        }
        for ($i = 0; $i < count($this->request->get('sites.url')); $i++) {
            if (count($this->request->get('sites.url')) == 1) {
                $rules['sites.url.' . $i] = 'url';
            } else {
                $rules['sites.url.' . $i] = 'required|url';
            }
        }
        for ($i = 0; $i < count($this->request->get('social_networks.url')); $i++) {
            if (count($this->request->get('social_networks.url')) == 1) {
                $rules['social_networks.url.' . $i] = 'url';
                $rules['social_networks.type.' . $i] = 'required_with:social_networks.url.' . $i . '|in:' . implode(',', $social_networks);
            } else {
                $rules['social_networks.url.' . $i] = 'required|url';
                $rules['social_networks.type.' . $i] = 'required|in:' . implode(',', $social_networks);
            }
        }
        for ($i = 0; $i < count($this->request->get('messengers.identity')); $i++) {
            if (count($this->request->get('messengers.identity')) == 1) {
                $rules['messengers.type.' . $i] = 'required_with:messengers.url.' . $i . '|in:' . implode(',', $messengers);
            } else {
                $rules['messengers.identity.' . $i] = 'required';
                $rules['messengers.type.' . $i] = 'required|in:' . implode(',', $messengers);
            }
        }
        for ($i = 0; $i < count($this->request->get('addresses.country')); $i++) {
            if (count($this->request->get('addresses.country')) == 1) {
                $rules['addresses.country.' . $i] = 'required_with:addresses.city.' . $i . ',addresses.address.' . $i . '';
                $rules['addresses.city.' . $i] = 'required_with:addresses.country.' . $i . ',addresses.address.' . $i . '';
                $rules['addresses.address.' . $i] = 'required_with:addresses.country.' . $i . ',addresses.city.' . $i . '';
                $rules['addresses.type.' . $i] = 'required_with:addresses.country.' . $i . ',addresses.city.' . $i . ',addresses.address.' . $i . '|in:' . implode(',', $addresses);
            } else {
                $rules['addresses.country.' . $i] = 'required';
                $rules['addresses.city.' . $i] = 'required';
                $rules['addresses.address.' . $i] = 'required';
                $rules['addresses.type.' . $i] = 'required|in:' . implode(',', $addresses);
            }
        }
        return $rules;
    }
}
