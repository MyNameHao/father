<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sever extends Model
{
    protected $table="server";


    public $primaryKey='s_id';  
    /**
     * 可以被批量赋值的属性
     * 
     */
     protected $fillable = ['s_type','s_time','c_name','l_name','s_cost','s_desc'];


     /**打上时间戳 */
     public $timestamps = false;
}
