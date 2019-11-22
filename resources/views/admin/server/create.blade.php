<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>客户添加页面</title>
</head>
<body>
    <h2>客户添加页面</h2>
    <form action="{{url('server/save')}}" method="post">
    @csrf
        <table border="1">
            <tr>
                <td>客户类别</td>                                                     
                <td>
                    <input type="text" name="s_type">
                </td>
            </tr>
            <tr>
                <td>服务日期</td>
                <td>
                    <input type="text" name="s_time">
                </td>
            </tr>
            <tr>
                <td>客户名称</td>
                <td>
                    <input type="text" name="c_name">
                </td>
            </tr>
            <tr>
                <td>联系人</td>
                <td>
                    <input type="text" name="l_name">
                </td>
            </tr>
            <tr>
                <td>服务预估成本</td>
                <td>
                    <input type="text" name="s_cost">
                </td>
            </tr>
            <tr>
                <td>服务内容描述</td>
                <td>
                    <textarea name="s_desc"></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="添加"> 
                </td>
            </tr>
        </table>
    </form>
</body>
</html>