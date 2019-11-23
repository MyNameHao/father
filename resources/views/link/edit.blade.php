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
							<li class="active">添加账号</li>
						</ul><!-- .breadcrumb -->
					</div>

					<div class="page-content">
							<div class="row">
							

									<div class="col-xs-12">
									
									<form class="form-horizontal" role="form" action="{{url('link/update/'.$res->l_id)}}" method="post">
										@csrf
										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 联系人单位 </label>

											<div class="col-sm-9">
												<select name="c_id">
														@if($res->c_id==1)
															<option value="">--请选择--</option>
															<option value="1" selected>财务部门</option>
															<option value="2">市场部门</option>
															<option value="3">管理部门</option>
															<option value="4">技术部门</option>
														@elseif($res->c_id==2)
															<option value="">--请选择--</option>
															<option value="1">财务部门</option>
															<option value="2" selected>市场部门</option>
															<option value="3">管理部门</option>
															<option value="4">技术部门</option>
														@elseif($res->c_id==3)
															<option value="">--请选择--</option>
															<option value="1">财务部门</option>
															<option value="2">市场部门</option>
															<option value="3" selected>管理部门</option>
															<option value="4">技术部门</option>
														@else
															<option value="">--请选择--</option>
															<option value="1">财务部门</option>
															<option value="2">市场部门</option>
															<option value="3">管理部门</option>
															<option value="4" selected>技术部门</option>
														@endif
												</select>
											</div>
										</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 联系人姓名 </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2" placeholder="联系人姓名" class="col-xs-10 col-sm-5" name="l_name" value="{{$res->l_name}}"/>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 联系人职位 </label>

														<div class="col-sm-9">
															<select name="l_duty">
															@if($res->l_duty==1)
																<option value="">--请选择--</option>
																<option value="1" selected>财务部</option>
																<option value="2">市场部</option>
																<option value="3">管理部</option>
																<option value="4">技术部</option>
															@elseif($res->l_duty==2)
																	<option value="">--请选择--</option>
																	<option value="1">财务部</option>
																	<option value="2" selected>市场部</option>
																	<option value="3">管理部</option>
																	<option value="4">技术部</option>
															@elseif($res->l_duty==3)
																	<option value="">--请选择--</option>
																	<option value="1">财务部</option>
																	<option value="2">市场部</option>
																	<option value="3" selected>管理部</option>
																	<option value="4">技术部</option>
															@else
																	<option value="">--请选择--</option>
																	<option value="1">财务部</option>
																	<option value="2">市场部</option>
																	<option value="3">管理部</option>
																	<option value="4" selected>技术部</option>
															@endif
															</select>
															</div>
									</div>
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 性别 </label>

											<div class="col-sm-9">

													@if($res->l_sex==1)
													<select name="l_sex">
														<option value="1" selected>男</option>
														<option value="2">女</option>
													</select>
													@else
													<select name="l_sex">
														<option value="1">男</option>
														<option value="2" selected>女</option>
													</select>
												@endif

											</div>
										</div>
										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 生日 </label>

											<div class="col-sm-9">
												<input type="text" id="form-field-2" placeholder="生日" class="col-xs-10 col-sm-5" name="l_bir" value="{{$res->l_bir}}"/>
											</div>
										</div>

										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 电话 </label>

											<div class="col-sm-9">
												<input type="text" id="form-field-2" placeholder="电话" class="col-xs-10 col-sm-5" name="l_tel" value="{{$res->l_tel}}"/>
											</div>
										</div>

										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 联系人住址 </label>

											<div class="col-sm-9">
												<textarea name="l_area" id="" cols="100" rows="5">{{$res->l_area}}</textarea>
											</div>
										</div>

										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> QQ </label>

											<div class="col-sm-9">
												<input type="text" id="form-field-2" placeholder="QQ" class="col-xs-10 col-sm-5" name="l_qq" value="{{$res->l_qq}}"/>
											</div>
										</div>

										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> email </label>

											<div class="col-sm-9">
												<input type="text" id="form-field-2" placeholder="email" class="col-xs-10 col-sm-5" name="l_email" value="{{$res->l_email}}"/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 备注 </label>

											<div class="col-sm-9">
												<textarea name="l_desc" id="" cols="100" rows="5">{{$res->l_desc}}</textarea>
											</div>
										</div>
								
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input type="submit" value="修改" class="icon-ok bigger-110 btn btn-info">


											&nbsp; &nbsp; &nbsp;
											<input type="reset" class="icon-undo bigger-110 btn" value="重置">
										</div>
									</div>

									<div class="hr hr-24"></div>



								</form>
									</div><!-- /span -->
								</div><!-- /row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

@endsection