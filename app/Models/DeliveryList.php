<?php

namespace App\Models;

class DeliveryList extends BaseModel
{
    public $timestamps = false;

    protected $table = 'delivery_list';
    protected $fillable = ['id', 'email'];
}