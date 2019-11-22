<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    //添加页面
    public function create(){
        return view('admin/server/create');
    }
    //添加方法
    public function save(){
        $post = request()->except('_token');
        dd($post);
    }
}
