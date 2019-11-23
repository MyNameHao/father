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
			<form action="{{url('customers/store')}}" method="post" class="form-horizontal" role="form">
				@csrf
					<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 客户名称 </label>
						<div class="col-sm-9">
							<input type="text" id="form-field-1" placeholder="请输入客户名称" name="c_name" class="col-xs-10 col-sm-5" />
						</div>
				</div>
				
				<div class="space-4"></div>
				
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 客户电话 </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-2" placeholder="请输入客户电话" name="c_tel" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 客户网址 </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-2" placeholder="请输入网址" name="c_url" class="col-xs-10 col-sm-5" />
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 客户电子邮件 </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-2" placeholder="请输入客户电子邮件" name="c_email" class="col-xs-10 col-sm-5" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 地区 </label>
				<div class="col-sm-9">
					<tr>
						<td colspan="3" style="font-family:'宋体';">
							<select class="area" name="c_sheng">
								<option value="" selected="selected">请选择...</option>
								@foreach($areas as $v)
								<option value="{{$v->id}}">{{$v->name}}</option>
								@endforeach
							</select>
							<select class="area" name="c_shi">
								<option value="" selected="selected">请选择...</option>
								<option value=""></option>
							</select>
							<select class="area" name="c_qu">
								<option value="" selected="selected">请选择...</option>
								<option value=""></option>
							</select>
						（必填）
						</td>
					</tr>

				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 详细地址 </label>
				<div class="col-sm-9">
					<input type="text" id="form-field-2" placeholder="请输入客户详细地址" name="c_area" class="col-xs-10 col-sm-5" />
				</div>
			</div>



		<div class="space-4"></div>


			<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 客户类型 </label>
			<div class="col-sm-9">
				<select name="t_id">
					<option value="">--请选择--</option>
					@foreach($typeInfo as $v)
						<option value="{{$v->t_id}}">{{$v->t_name}}</option>
					@endforeach
				</select>
			</div>
		</div>


		<div class="form-group">
		<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 客户来源 </label>
		<div class="col-sm-9">
			<select name="cus_id">
				<option value="">--请选择--</option>
				@foreach($customerInfo as $v)
					<option value="{{$v->cus_id}}">{{$v->cus_name}}</option>
				@endforeach
			</select>
		</div>
		</div>

				<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-2">企业备注</label>


				<div class="col-sm-9">
					<div class="input-group" style="width:150px;">
						<textarea name="c_desc" cols="30" rows="10"></textarea>
					</div>
				</div>
			</div>
			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					<button class="btn btn-info" type="submit">
						<i class="icon-ok bigger-110"></i>
						增加
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
<script src='/jquery.js'></script>
<script>
$(function(){
	$(document).on('change','.area',function(){
		var _this=$(this);
		var pid=_this.val();
		var _option='<option value="">--请选择--</option>';
		_this.nextAll('select').html(_option);
		if(pid===''){
			_this.nextAll('select').html(_option);
			return false;
		}
		$.post(
			"{{url('customers/areas')}}",
			{pid:pid,_token:"{{csrf_token()}}"},
			function(res){
				for(var $i in res){
					_option+='<option value="'+res[$i]['id']+'">'+res[$i]['name']+'</option>'
				}
				_this.next('select').html(_option)
			}
		)
		
	})
})
</script>

@endsection