<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class AreaModel extends Model
{
    public $primaryKey='id';
    protected $guarded = [];
    public $table='area';
    public $timestamps=false;
}