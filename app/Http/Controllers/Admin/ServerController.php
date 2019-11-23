<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Server;

class ServerController extends Controller
{
    //添加页面
    public function create(){
        return view('admin/server/create');
    }
    //添加方法
    public function save(){
        $post = request()->except('_token');
        $post['s_time']=time();
        $data = Server::create($post);
        if($data){
            echo  "<script>alert('添加成功');location='/server/index'</script>";
        }else{
            echo  "<script>alert('添加失败');location='/server/create'</script>";
        }
    }
    //列表展示
    public function index(){
        $data = Server::paginate(5);
        return view('admin/server/index',['data'=>$data]);
    }
    //删除方法
    public function del($s_id){
        $data = Server::where('s_id',$s_id)->delete();
        if($data){
            echo  "<script>alert('删除成功');location='/server/index'</script>";
        }else{
            echo  "<script>alert('删除失败');location='/server/index'</script>";
        }
    }
    //跳转修改页面
    public function upd($s_id){ 
        $data = Server::where('s_id',$s_id)->first();
        return view('admin/server/upd',['data'=>$data]);
    }
    //执行修改方法
    public function upd_do($s_id){
        $post = request()->except('_token');
        $data = Server::where('s_id',$s_id)->update($post);
        if($data){
            echo  "<script>alert('修改成功');location='/server/index'</script>";
        }else{
            echo  "<script>alert('修改失败');location='/server/index'</script>";
        }
    }
}
