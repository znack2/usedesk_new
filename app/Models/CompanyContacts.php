<?php

namespace App\Models;

class CompanyContacts extends BaseModel
{
    public $timestamps = false;

    protected $table = 'company_contacts';
    protected $fillable = [
    	 'city',
	     'address',
	     'phones',
	     'emails',
	     'account_details',
	     'company_id'
 	];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }

}
