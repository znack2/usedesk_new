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


    public function company() {
        return $this->belongsTo('App\Models\Company');
    }
}
