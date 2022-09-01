<?php
session_start();
if (isset($_SESSION['key'])) {
    $key = $_SESSION['key'];
    if ($key==0)
    {
        echo "<script>alert('账号或密码错误！')</script>";
        unset($_SESSION['key']);
    }
}
else {
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="texe/html; charset=utf-8">
    <title>登陆界面</title>
</head>
<body>
<div align="center">
    <h2 style="color: black;">&nbsp&nbsp&nbsp欢迎使用！</h2>
    <form name="form1" action="../control/DB.php" method="get">
        <table border="6px">
            <tr>
                <td></td>
                <td>管理员<input type="radio" id="juese" name="juese" value="1" checked>
                    顾客<input type="radio" id="juese" name="juese" value="2">
                </td>
            </tr>
            <tr>
                <td>登陆账号</td>
                <td><input type="text" id="username" name="username" size="19" maxlength="12"/></td>
            </tr>
            <tr>
                <td>登陆密码</td>
                <td><input type="password" id="password" name="password"/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button id="btn">提交</button>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <button type=button onclick="window.location.href='login.php'">注册</button>
                </td>
            </tr>
        </table>
    </form>
</div>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btn").click(function () {
            var juese = $("#juese").val();
            var username = $("#username").val();
            var password = $("#password").val();
            if (username.length==0)
            {
                alert('账号未填写！');
                return false
            }
            if (password.length==0)
            {
                alert('密码未填写！');
                return false
            }
        })
    })
</script>
</body>
</html>