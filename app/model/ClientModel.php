<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ClientModel extends Model
{
    public $primaryKey='c_id';
    protected $guarded = [];
    public $table='client';
    public $timestamps=false;
}
