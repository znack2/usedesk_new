<?php

namespace App\Models;

class Invoice extends BaseModel {

    public $timestamps = false;

    protected $table = 'invoices';
    protected $fillable = [
		'amount',
		'status',
		'document_copy',
		'created_at',
		'deadline',
		'blocking',
		'company_id'
 	];

    const STATUS_PAID = 'paid';
    const STATUS_NOT_PAID = 'not_paid';
    const STATUS_AWAITING_CONFIRMATION = 'awaiting_confirmation';

    public function company() {
        return $this->belongsTo('Company');
    }
}
