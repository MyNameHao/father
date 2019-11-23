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
														<th>联系人id</th>
														<th>客户单位</th>
														<th>联系人职位</th>
														<th>联系人名称</th>
														<th>联系人性别</th>
														<th>联系人生日</th>
														<th>联系人住址</th>
														<th>联系人电话</th>
														<th>联系人邮箱</th>
														<th>联系人QQ</th>
														<th>联系人备注</th>
														<th>操作</th>
													</tr>
												</thead>
											@foreach($data as $k=>$v)
												<tbody>
													<tr>
														<td>{{$v->l_id}}</td>

														<td>
															@if($v->c_id==1)
																财务部门
															@elseif($v->c_id==2)
																市场部门
															@elseif($v->c_id==3)
																管理部门
															@elseif($v->c_id==4)
																技术部门
															@endif
														</td>

														<td>
															@if($v->l_duty==1)
																财务部
															@elseif($v->l_duty==2)
																市场部
															@elseif($v->l_duty==3)
																管理部
															@elseif($v->l_duty==4)
																技术部
															@endif
														</td>
														<td>{{$v->l_name}}</td>
														<td>{{$v->l_sex==1?'男':'女'}}</td>
														<td>{{$v->l_bir}}</td>
														<td>{{$v->l_area}}</td>
														<td>{{$v->l_tel}}</td>
														<td>{{$v->l_email}}</td>
														<td>{{$v->l_qq}}</td>
														<td>{{$v->l_desc}}</td>
														<td>
															<a href="{{url('/link/edit/'.$v->l_id)}}" class="btn">编辑</a>
															<a href="{{url('/link/delete/'.$v->l_id)}}" class="btn btn-danger">删除</a>
														</td>
													</tr>
											@endforeach

													
												</tbody>
											</table>
											{{$data->links()}}
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

			@endsection