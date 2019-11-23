@extends('layouts.shop')

@section('content')


<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

					</div>

					<div class="page-content">
							<div class="row">
							

									<div class="col-xs-12">

									
									
										<div class="table-responsive">
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														
														<th>编号</th>
														<th>服务类型</th>
														<th>服务日期</th>
														<th>客户名称</th>
														<th>联系人</th>
														<th>服务预估成本</th>
														<th>服务内容描述</th>
														<th>操作</th>
													</tr>
												</thead>
                                @foreach($data as $v)
												<tbody>
													<tr>
														<td>{{$v->s_id}}</td>
														<td>{{$v->s_type}}</td>
														<td>{{date('Y-m-d h:i:s',$v->s_time)}}</td>
														<td>{{$v->c_name}}</td>
														<td>{{$v->l_name}}</td>
														<td>{{$v->s_cost}}</td>
														<td>{{$v->s_desc}}</td>
														<td>
														<a href="{{url('server/del/'.$v->s_id)}}" class="btn btn-danger">删除</a>
														<a href="{{url('server/upd/'.$v->s_id)}}" class="btn">编辑</a>
														</td>
													</tr>													
                                                </tbody>
                                @endforeach
                                            </table>
                                            {{$data->links()}}
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->


@endsection
