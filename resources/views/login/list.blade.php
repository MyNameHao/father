@extends('layouts.shop')
@section('content')
<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="#">首页</a>
            </li>
            <li class="active">安居客控制台</li>
            <li class="active">房源管理</li>
            <li class="active">账号设置</li>
            <li class="active">账号记录</li>
        </ul><!-- ->breadcrumb -->
    </div>

    <div class="page-content">
        <div class="row">


            <div class="col-xs-12">

                <div class="table-responsive">
                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>管理员id</th>
                            <th>名称</th>
                            <th>账号</th>
                            <th>密码</th>
                            <th>操作</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $v)
                         <tr>
                            <td>{{$v->c_id}}</td>
                            <td>{{$v->c_name}}</td>
                            <td>{{$v->c_account}}</td>
                            <td>{{$v->c_pwd}}</td>
                            <td>
                                <button class="btn edit">编辑</button>
                                <a href="{{url('index/delete/'.$v->c_id)}}"><button class="btn btn-danger del" >删除</button></a>
                            </td>
                        </tr>
                      @endforeach
                        </tbody>
                    </table>

                    {{$data->links()}}
                </div><!-- /->table-responsive -->
            </div><!-- /span -->
        </div><!-- /row -->

    </div><!-- /->page-content -->
</div>
    @endsection
