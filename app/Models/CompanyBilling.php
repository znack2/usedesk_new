<?php

namespace App\Models;

class CompanyBilling extends BaseModel
{


    public $timestamps = false;

    protected $table = 'company_billings';
    protected $fillable = [
        'users_number',
        'data_plan',
        'payment_type',
        'card_number',
        'card_token',
        'invoicing_period',
        'next_invoice',
        'type',
        'amount',
        'contract_number',
        'contract_date',
        'company_name',
        'company_inn',
        'company_ppc',
        'company_bin',
        'company_legal_address',
        'company_actual_address',
        'company_address_match',
        'company_id',
        'additional_fields',
        'ga_client_id',
        'ga_sent'
     ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
