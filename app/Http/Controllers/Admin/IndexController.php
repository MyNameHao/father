<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\model\Admin;
use Illuminate\Http\Request;

class IndexController extends Controller
{


    //首页
    public function index(){

        return view('index.index');
    }

    //登陆
    public function logindo(){

        $data=request()->except('_token');
//    dd($data);
//        dd($data);
        $admin=Admin::where('c_account',$data['c_account'])->first();
//        dd($admin);
//    dd($admin);
//    dd($admin['admin_pwd']);
//    dd($data['admin_pwd']);
        if(empty($admin)){
            echo  "<script>alert('账户不存在');window.history.go(-1)</script>";
        }
        if($admin['c_pwd']==$data['c_pwd']){
//        session('user',$admin);
            session(['user' => $admin]);
            echo  "<script>location.href='/index/index';alert('登陆成功')</script>";

        }else{
            echo  "<script>alert('密码错误');window.history.go(-1)</script>";
        }
    }
}
