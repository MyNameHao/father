<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ClientModel;
use App\Model\TypeModel;
use App\Model\CustomerModel;
use App\Model\AreaModel;

class CustomersController extends Controller
{
    /*展示视图*/
    public function create(){

        $typeInfo=TypeModel::get();
        $customerInfo=CustomerModel::get();
        $areas=AreaModel::where('pid',0)->get();
        return view('customers.create',['typeInfo'=>$typeInfo,'customerInfo'=>$customerInfo,'areas'=>$areas]);
    }
    /*三级联动*/
    public function areas(){
        $pid=request()->pid;
        $areas=AreaModel::where('pid',$pid)->get();
        return $areas;
    }
    /*执行添加*/
    public function store(){
        $data=request()->except('_token');
        $res=ClientModel::create($data);
        if($res){
            echo "<script>location.href='index';alert('添加成功');</script>";
        }else{
            echo "<script>alert('添加失败');location.href('index')</script>";
        }
    }

    /*列表展示*/
    public function index(){
        $Info=ClientModel::Join('type','client.t_id','=','type.t_id')
            ->Join('customer','client.cus_id','=','customer.cus_id')
            ->paginate(2);
        return view('customers.index',['Info'=>$Info]);
    }
    /*删除*/
    public function delete($c_id){
        if(!$c_id){
            abort(404);
        }
        $res=ClientModel::where('c_id',$c_id)->delete();
        if($res){
            return redirect('customers/index');
        }else{
            return redirect('customers/index');
        }
    }

    /*修改视图*/
    public function edit($c_id){
        $typeInfo=TypeModel::get();
        $customerInfo=CustomerModel::get();
        $areas=AreaModel::where('pid',0)->get();
        $data=ClientModel::where('c_id',$c_id)->first();
    	// 查询所有的省份作为下拉菜单的值
    	$provinceInfo=$this->areass(0);

    	// 获取当前省份下的所有市
    	$cityInfo=$this->areass($data['c_sheng']);

    	// 获取所有市下的区/县
    	$areaInfo=$this->areass($data['c_shi']);
        
        return view('customers.edit',['data'=>$data,'typeInfo'=>$typeInfo,'customerInfo'=>$customerInfo,'areas'=>$areas,'provinceInfo'=>$provinceInfo,'cityInfo'=>$cityInfo,'areaInfo'=>$areaInfo]);
    }
    
    /*反映修改视图/三级联动*/
    public function areass($pid){
            $areas=AreaModel::where('pid',$pid)->get();
            return $areas;
    }

    /*执行修改*/
    public function update($c_id){
        $post=request()->except('_token');
        $res=ClientModel::where('c_id',$c_id)->update($post);
        if($res){
            return redirect('customers/index');
        }else{
            return redirect('customers/index');
        }
        return view('customers.create');
    }
}
