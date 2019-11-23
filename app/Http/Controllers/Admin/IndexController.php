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
//    dd($admin['c_pwd']);
//    dd($data['c_pwd']);
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


    //管理员添加
    public  function create(){


            return view('login.create');
    }
    //管理员添加
    public function save(Request $request){
        $validator = \Validator::make($request->all(), [
            'c_name' => 'required|unique:admin|min:2|max:10',
            'c_account' => 'required|unique:admin|min:2|max:16',
            'c_pwd' => 'required|min:6|max:10',
        ],[
            'c_name.required'=>'管理员姓名不能为空',
            'c_account.required'=>'管理员账号不能为空',
            'c_pwd.required'=>'管理员密码不能为空',
            'c_name.unique'=>'*管理员姓名已经存在',
            'c_account.unique'=>'*管理员账号已经存在',
            'c_account.min'=>'*管理员账号2到16位',
            'c_name.min'=>'*管理员姓名2到10位',
            'c_pwd.min'=>'*管理员密码2到10位',
            'c_account.max'=>'*管理员账号2到16位',
            'c_name.max'=>'*管理员姓名2到10位',
            'c_pwd.max'=>'*管理员密码2到10位'
        ]);
        if ($validator->fails()) {
            return redirect('index/create')
                ->withErrors($validator)
                ->withInput();
        }
        $data=request()->except('_token');

        $res=Admin::create($data);
        if($res){
            echo "<script>location.href='/index/list';alert('添加成功')</script>>";
        }
    }

    //管理员展示
      public function  list(){

          $data=Admin::paginate(5);

          return view('login.list',['data'=>$data]);

      }

       //管理员删除
    public function   delete($id){

        $data=Admin::where('c_id',$id)->delete();
        if($data){
            echo  "<script>location.href='/index/list';alert('删除成功')</script>";
        }else{
            echo  "<script>location.href='/index/list';alert('删除失败')</script>";
        }
    }

}
