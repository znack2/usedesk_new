<?php

namespace App\Models;

class Payment extends BaseModel {


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
