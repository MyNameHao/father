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
						</ul><!-- .breadcrumb -->
					</div>

					<div class="page-content">
							<div class="row">
							

									<div class="col-xs-12">

									
									
				<div class="table-responsive">
					<table id="sample-table-1" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th class="center">
									<label>
										<input type="checkbox" class="ace" />
										<span class="lbl"></span>
									</label>
								</th>
								<th>客户ID</th>
								<th>客户姓名</th>
								<th>客户电话</th>
								<th>客户网址</th>
								<th>客户电子邮件</th>
								<th>详细地址</th>
                                <th>客户类型</th>
                                <th>客户来源</th>
                                <th>企业备注</th>
                                <th>操作</th>
							</tr>
						</thead>
                        <tbody>
                        @foreach($Info as $v)
							<tr>
								<td class="center">
									<label>
										<input type="checkbox" class="ace" />
										<span class="lbl"></span>
									</label>
								</td>

								<td>{{$v->c_id}}</td>
								<td>{{$v->c_name}}</td>
								<td>{{$v->c_tel}}</td>
								<td>{{$v->c_url}}</td>
								<td>{{$v->c_email}}</td>
								<td>{{$v->c_area}}</td>
								<td>{{$v->t_name}}</td>
								<td>{{$v->cus_name}}</td>
								<td>{{$v->c_desc}}</td>
								<td>
									<a href="{{url('customers/edit/'.$v->c_id)}}">编辑</a>
									<a href="{{url('customers/delete/'.$v->c_id)}}">删除</a>
								</td>
                            </tr>
                        @endforeach
                        </tbody>
					</table>
					 {{$Info->links()}}
				</div><!-- /.table-responsive -->
			</div><!-- /span -->
		</div><!-- /row -->
	</div><!-- /.page-content -->
</div><!-- /.main-content -->

@endsection