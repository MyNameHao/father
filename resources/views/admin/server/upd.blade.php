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

                                    <form class="form-horizontal" role="form" action="{{url('server/upd_do/'.$data->s_id)}}"  method="post">
                                        @csrf
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 联系人 </label>


										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="联系人" value="{{$data->l_name}}" name="l_name" class="col-xs-10 col-sm-5" />
										</div>
									</div>


									<div class="space-4"></div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 客户名称 </label>


										<div class="col-sm-9">
											<input type="text" id="form-field-2" placeholder="客户名称" value="{{$data->c_name}}" name="c_name" class="col-xs-10 col-sm-5" />
										</div>
									</div>


									<div class="space-4"></div>


									<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 服务类型 </label>


														<div class="col-sm-9">
															<select name="s_type">
																<option value="">--请选择--</option>
																<option value="财务部">财务部</option>
																<option value="市场部">市场部</option>
																<option value="管理部">管理部</option>
																<option value="技术部">技术部</option>
															</select>
															</div>
                                    </div>
                                   


									<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 服务预估成本 </label>


														<div class="col-sm-9">
															<input type="text" name="s_cost" value="{{$data->s_cost}}">
															</div>
                                    </div>
                                    
                                    <div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 服务内容描述 </label>


														<div class="col-sm-9">
															<textarea name="s_desc">{{$data->s_desc}}</textarea>
															</div>
									</div>

									<!-- <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">服务日期</label>


										<div class="col-sm-9">
													<div class="input-group" style=" width:150px;">
														<input class="form-control date-picker" id="id-date-picker-1" name="s_time" type="text" data-date-format="dd-mm-yyyy" />
														<span class="input-group-addon">
															<i class="icon-calendar bigger-110"></i>
														</span>
													</div>
										</div>
									</div> -->


								
									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info">
												<i class="icon-ok bigger-110"></i>
												修改
											</button>


											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>


									<div class="hr hr-24"></div>






								</form>
									</div><!-- /span -->
								</div><!-- /row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->


@endsection