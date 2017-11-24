<?php

namespace App\Models;

class Payment extends BaseModel {

    const STATUS_NEW = 'new';
    const STATUS_PENDING = 'pending';
    const STATUS_PAID = 'paid';
    const STATUS_FAILED = 'failed';

    public $timestamps = false;

    protected $table = 'payment';
    protected $fillable = [
		'payu_ref',
		'amount',
		'status',
		'invoice_id',
		'company_id',
		'date_create',
		'date_update'
 	];

}
