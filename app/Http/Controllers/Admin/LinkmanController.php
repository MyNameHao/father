<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Linkman;
class LinkmanController extends Controller
{
    //添加页面
    public function index(){

        return view('link.index');
    }
    //添加执行页面
    public function save(){
        $data = request()->except('_token');
        $res = Linkman::insert($data);
        if($res){
            echo "<script>alert('添加成功');location='/link/list'</script>";
        }else{
            echo "<script>alert('添加失败');location='/link/list'</script>";0
        }

    }

    //列表展示页面
    public function list(){
        $data = Linkman::paginate(2);

        return view('link.list',['data'=>$data]);
    }

    //修改执行页面
    public function edit($l_id){
//        dd($l_id);
        $res =Linkman::where('l_id',$l_id)->first();

    return view('/link/edit',['res'=>$res]);
    }

    //修改执行页面
    public function update($l_id){
//        dd($l_id);
    $data = request()->except('_token');
//        dd($data);
    $res = Linkman::where('l_id',$l_id)->update($data);
        if($res){
            echo "<script>alert('修改成功');location='/link/list'</script>";
        }else{
            echo "<script>alert('修改失败');location='/link/list'</script>";
        }
    }

    //删除执行
    public function delete($l_id){
//        dd($l_id);
    $res = Linkman::where('l_id',$l_id)->delete();
        if($res){
            echo "<script>alert('删除成功');location='/link/list'</script>";
        }else{
            echo "<script>alert('删除失败');location='/link/list'</script>";
        }
    }

}
