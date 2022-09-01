<?php
session_start();
if (isset($_SESSION['key'])) {
    $key = $_SESSION['key'];
    if($key==1)
    {
        echo "<script>alert('注册成功！')</script>";
        unset($_SESSION['key']);
    }
    if ($key==0)
    {
        echo "<script>alert('注册失败！')</script>";
        unset($_SESSION['key']);
    }
}
else {

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>注册</title>
</head>
<body>
<form action="../control/login.php" method="post" onsubmit="return checkPassword()">
    <div align="center">
        <h1 style="color: black;">&nbsp&nbsp&nbsp欢迎注册！</h1>
        <a href="begin.php"><div style="color: black;">返回主页</div></a>
        <br>
        <table border="6px">
            <tr>
                <td><h4><div style="color: black;">账号：</div></h4></td>
                <td><input type="text" name="username" required maxlength="40" placeholder="请输入账号"/></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">密码：</div></h4></td>
                <td><input type="password" name="password" id="password" required placeholder="请输入密码"></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">确认密码：</div></h4></td>
                <td><input type="password" name="password1" id="password1" required placeholder="请输入密码"></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">手机号：</div></h4></td>
                <td><input type="text" name="phone" id="phone" required placeholder="请输入手机号" ></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">邮箱：</div></h4></td>
                <td><input type="email" name="email"  required  placeholder="请输入邮箱"/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">提&nbsp&nbsp&nbsp交</button>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <button type="reset">清&nbsp&nbsp&nbsp空</button>
                </td>
            </tr>
        </table>
    </div>
</form>
</body>
<script type="text/javascript">
    function checkPassword(){
        var password = document.getElementById('password').value;
        var password1 = document.getElementById('password1').value;
        var phone = document.getElementById('phone').value;
        if(!(password==password1)){
            alert("两次密码不一致！");
            return false;
        }
        if(!(/^1[34578]\d{9}$/.test(phone))){
            alert("手机号码有误，请重填");
            return false;
        }
    }
</script>
</html>