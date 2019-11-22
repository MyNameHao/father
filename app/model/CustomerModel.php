<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    public $primaryKey='c_id';
    protected $guarded = [];
    public $table='customer';
    public $timestamps=false;
}
