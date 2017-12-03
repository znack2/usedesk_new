<?php

namespace App\Models;

use Elasticquent\ElasticquentTrait;


class CompanyCustomBlock extends BaseModel
{
	use ElasticquentTrait;

    public $timestamps = false;

    protected $table = 'company_custom_blocks';
    protected $fillable = [
		'company_id',
		'type',
		'name',
		'title',
		'text',
		'url',
		'secret_key',
		'sort',
		'active'
 	];

 	protected $mappingProperties = [
	    'title' => [
	      'type' => 'string',
	      "analyzer" => "standard",
	    ],
	    'text' => [
	      'type' => 'string',
	      "analyzer" => "standard",
	    ],
	    'url' => [
	      'type' => 'string',
	      "analyzer" => "stop",
	      "stopwords" => ["/"]
	    ],
  	];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
