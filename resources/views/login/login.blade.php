<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css//sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->`
	<link rel="stylesheet" href="/assets/css/font-awesome.min.css" />


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">微商场后台管理登录</h3>
                    </div>
                    <div class="panel-body">
                        <form  action="{{url('admin/logindo')}}" method="post">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="手机号" name="c_accountt"  >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="密码" name="c_pwd" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">记住密码
										
                                    </label>
									 
                                </div>
								
                                <!-- Change this to a button or input when using this as a form -->
                                {{--<a href="index.html" class="btn btn-lg btn-success btn-block">登录</a>--}}
                                <button class="btn btn-lg btn-success btn-block">登陆</button>
								<div style="text-align:right;">
									<a href="#" class="btn ">没有账号！请联系管理员</a>
								</div>
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
