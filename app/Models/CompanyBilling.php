<?php

namespace App\Models;

class CompanyBilling extends BaseModel
{

    const TYPE_DEFAULT = 'default';
    const TYPE_FIXED = 'fixed';

    const DATA_PLAN_TRIAL = 'trial';
    const DATA_PLAN_FREE = 'free';
    const DATA_PLAN_PAID = 'paid';

    const PAYMENT_TYPE_BANK_CARD = 'bank_card';
    const PAYMENT_TYPE_SETTLEMENT_ACCOUNT = 'settlement_account';

    const INVOICING_PERIOD_MONTH = 'month';
    const INVOICING_PERIOD_YEAR = 'year';

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
