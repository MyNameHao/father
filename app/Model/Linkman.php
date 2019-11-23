<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Linkman extends Model
{
    //
    protected $table='linkman';
    public $primaryKey='l_id';
    protected $fillable=['c_id','l_duty ','l_name','l_sex','l_bir','l_area','l_tel','l_email','l_qq','l_desc'];
    public $timestamps = false;
}
