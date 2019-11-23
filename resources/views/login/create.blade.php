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

					<form class="form-horizontal" action="{{url('/index/save')}}" method="post" role="form" id="myform">
						@csrf
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 管理员名称 </label>
							<div class="col-sm-9">
								<input type="text" id="form-field-1" name="c_name" placeholder="管理员名称" class="col-xs-10 col-sm-5" />
								<b style="color: red">{{$errors->first('c_name')}}</b>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 管理员账户 </label>
							<div class="col-sm-9">
								<input type="text" id="form-field-1" name="c_account" placeholder="管理员账户" class="col-xs-10 col-sm-5" />
								<b style="color: red">{{$errors->first('c_account')}}</b>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 管理员密码 </label>
							<div class="col-sm-9">
								<input type="password" id="form-field-1" name="c_pwd" placeholder="管理员密码" class="col-xs-10 col-sm-5" />
								<b style="color: red">{{$errors->first('c_pwd')}}</b>

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
	</div>
	<script>
		$("input[name='cate_name']").on('blur',function(){
//			alert(1);
		$("input[name='cate_name']")
		})
	</script>
@endsection