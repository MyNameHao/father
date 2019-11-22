<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $primaryKey='c_id';
    protected $guarded = [];
    public $table='admin';
    public $timestamps=false;
}
