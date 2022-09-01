<?php
session_start();
if (isset($_SESSION['key'])) {
    $key = $_SESSION['key'];
    if($key==1)
    {
        echo "<script>alert('信息修改成功！')</script>";
        unset($_SESSION['key']);
    }
    if ($key==0)
    {
        echo "<script>alert('信息修改成功！')</script>";
        unset($_SESSION['key']);
    }
    if ($key==2)
    {
        echo "<script>alert('原密码错误！')</script>";
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
    <title>修改个人密码</title>
</head>
<body>
<form action="../control/updategukephone.php" method="post" onsubmit="return checkPassword()">
    <div align="center">
        <h1 style="color: black;">&nbsp&nbsp&nbsp欢迎进行个人密码更改！</h1>
        <a href="menu1.php"><div style="color: black;">返回主页</div></a>
        <br>
        <table border="6px">
            <tr>
                <td><h4><div style="color: black;">原密码：</div></h4></td>
                <td><input type="password" id="oldpassword" name="oldpassword" required maxlength="40" placeholder="请输入原密码"></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">新密码：</div></h4></td>
                <td><input type="password" id="newpassword" name="newpassword"  required placeholder="请输入新密码"></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">确认密码：</div></h4></td>
                <td><input type="password" id="newpassword1" name="newpassword1"  required placeholder="确认密码"></td>
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
        var newpassword = document.getElementById('newpassword').value;
        var newpassword1 = document.getElementById('newpassword1').value;
        if(!(newpassword==newpassword1)){
            alert("两次密码不一致！");
            return false;
        }
    }
</script>
</html>