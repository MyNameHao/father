<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TypeModel extends Model
{
    public $primaryKey='t_id';
    protected $guarded = [];
    public $table='type';
    public $timestamps=false;
}
