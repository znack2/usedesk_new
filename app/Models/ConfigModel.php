<?php

namespace App\Models;

class ConfigModel extends BaseModel {

    const KEY_TRIAL_PERIOD = 'trial_period';
    const KEY_PAYMENT_PERIOD = 'payment_period';
    const KEY_PRICE_PER_USER = 'price_per_user';
    const KEY_INVOICING_DAY = 'invoicing_day';
    const KEY_COMPANY_NAME = 'company_name';
    const KEY_COMPANY_INN = 'company_inn';
    const KEY_COMPANY_PPC = 'company_ppc';
    const KEY_COMPANY_BIN = 'company_bin';
    const KEY_COMPANY_GIRO = 'company_giro';
    const KEY_COMPANY_CA = 'company_ca';
    const KEY_COMPANY_BANK = 'company_bank';
    const KEY_COMPANY_LEGAL_ADDRESS = 'company_legal_address';
    const KEY_SPAM_SCORE = 'spam_score';
    const KEY_SMS_CONFIRMATION = 'sms_confirmation';
    const KEY_NUM_PUCTURES_IN_LETTER = 'num_pictures_in_latter';
    const KEY_UNSUBSCRIBE_IN_LETTER = 'unsubscribe_in_letter';
    const KEY_NUM_LINKS_IN_LETTER = 'num_links_in_letter';

    public $timestamps = false;

    protected $table = 'config';
    protected $fillable = ['key', 'value'];
}
